
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using MySqlConnector;
using System.ComponentModel.DataAnnotations;

namespace NeliRoseWebsite.Pages;

public class ContactModel : PageModel
{
    private readonly IConfiguration _configuration;
    private readonly ILogger<ContactModel> _logger;

    public ContactModel(
        IConfiguration configuration,
        ILogger<ContactModel> logger)
    {
        _configuration = configuration;
        _logger = logger;
    }

    [BindProperty]
    [Required]
    public string FirstName { get; set; } = "";

    [BindProperty]
    [Required]
    public string LastName { get; set; } = "";

    [BindProperty]
    [Required]
    [EmailAddress]
    public string Email { get; set; } = "";

    [BindProperty]
    public string? Phone { get; set; }

    [BindProperty]
    public string? Enquiry { get; set; }

    [BindProperty]
    [Required]
    public string Message { get; set; } = "";

    [BindProperty]
    public bool Consent { get; set; }

    public bool MessageSent { get; set; }
    public string? ErrorMessage { get; set; }

    public void OnGet()
    {
    }

    public async Task<IActionResult> OnPostAsync()
    {
        if (!Consent)
        {
            ModelState.AddModelError(
                nameof(Consent),
                "Please provide consent before submitting.");
        }

        if (!ModelState.IsValid)
        {
            ErrorMessage = "Please complete the required fields correctly.";
            return Page();
        }

        string? connectionString =
            _configuration.GetConnectionString("DefaultConnection");

        try
        {
            await using var connection =
                new MySqlConnection(connectionString);

            await connection.OpenAsync();

            const string sql = @"
                INSERT INTO contacts
                (first_name, last_name, email, phone, message)
                VALUES
                (@firstName, @lastName, @email, @phone, @message);";

            await using var command =
                new MySqlCommand(sql, connection);

            command.Parameters.AddWithValue("@firstName", FirstName.Trim());
            command.Parameters.AddWithValue("@lastName", LastName.Trim());
            command.Parameters.AddWithValue("@email", Email.Trim());
            command.Parameters.AddWithValue("@phone", Phone ?? "");
            command.Parameters.AddWithValue("@message", Message.Trim());

            await command.ExecuteNonQueryAsync();

            MessageSent = true;
            ModelState.Clear();

            FirstName = "";
            LastName = "";
            Email = "";
            Phone = "";
            Enquiry = "";
            Message = "";
            Consent = false;

            return Page();
        }
        catch (Exception ex)
        {
            _logger.LogError(ex, "Failed to save a contact enquiry.");

            ErrorMessage =
                "We could not save your message. Please try again.";
            return Page();
        }
    }
}

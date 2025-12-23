# Personal Expense Tracker

Simple PHP & MySQL personal expense tracker.

## Setup

1. Install XAMPP (Apache + MySQL).
2. Copy the `personal-expense-tracker` folder into `htdocs` (e.g., `C:\xampp\htdocs\personal-expense-tracker`).
3. Start Apache and MySQL from XAMPP Control Panel.
4. Import the SQL file `database/expense_tracker.sql` into phpMyAdmin or using `mysql` CLI.

Using phpMyAdmin:
- Open `http://localhost/phpmyadmin`
- Create/import `database/expense_tracker.sql`.

Using MySQL CLI (PowerShell):

```powershell
# from XAMPP MySQL bin directory or ensure mysql is in PATH
mysql -u root -p < "C:\path\to\personal-expense-tracker\database\expense_tracker.sql"
```

5. Open `http://localhost/personal-expense-tracker` in your browser.
6. Register a new user, then add/manage expenses.

## Files
- `config.php` — DB connection and session start.
- `register.php`, `login.php`, `dashboard.php` — user flow.
- `add_expense.php`, `manage_expense.php` — expense CRUD (add + list).
- `css/style.css` — basic styling.

## Notes
- This is a minimal demo. For production, sanitize DB inputs and use prepared statements to prevent SQL injection.

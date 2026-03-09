# Personal Expense Tracker

A simple, lightweight PHP & MySQL application for tracking personal expenses. Register an account, add expenses, and manage your spending with an easy-to-use dashboard.

## Features

- **User Authentication** — Secure registration and login system
- **Dashboard** — View all expenses at a glance
- **Add Expenses** — Quickly record new expenses with descriptions
- **Manage Expenses** — Edit or delete existing expenses
- **Responsive Design** — Clean, minimal interface

## Prerequisites

Before starting, ensure you have:
- **XAMPP** (Apache + PHP + MySQL) — [Download](https://www.apachefriends.org/)
- **Web Browser** (Chrome, Firefox, Edge, Safari)
- **Basic Command Line Knowledge** (PowerShell/CMD)

## Installation & Setup

### Step 1: Install XAMPP
1. Download and install XAMPP from [apachefriends.org](https://www.apachefriends.org/)
2. Install in the default location (e.g., `C:\xampp`)

### Step 2: Copy Project Files
1. Copy the `personal-expense-tracker` folder to XAMPP's htdocs directory:
   ```
   C:\xampp\htdocs\personal-expense-tracker
   ```

### Step 3: Start Apache & MySQL
1. Open **XAMPP Control Panel**
2. Click **Start** next to Apache
3. Click **Start** next to MySQL
4. Wait for both services to show "Running" status

### Step 4: Create & Import Database

#### Option A: Using phpMyAdmin (Recommended)
1. Open browser and go to: `http://localhost/phpmyadmin`
2. Click **New** in the left sidebar
3. Create database named: `expense_tracker`
4. Click on the new database, then click **Import**
5. Click **Choose File** and select `database/expense_tracker.sql`
6. Click **Import**

#### Option B: Using MySQL CLI (PowerShell)
1. Open PowerShell and navigate to XAMPP MySQL bin directory:
   ```powershell
   cd "C:\xampp\mysql\bin"
   ```
2. Run the import command:
   ```powershell
   .\mysql -u root < "d:\personal-finance-tracker\personal-expense-tracker\database\expense_tracker.sql"
   ```

### Step 5: Access the Application
1. Open your browser and navigate to:
   ```
   http://localhost/personal-expense-tracker
   ```
2. You should see the login page

### Step 6: Create Your Account
1. Click **Register New Account**
2. Enter a username and password
3. Click **Register**
4. Log in with your new credentials
5. Start adding and managing expenses!

## File Structure

```
personal-expense-tracker/
├── index.php              # Login/Register entry point
├── dashboard.php          # Main expense dashboard
├── add_expense.php        # Add new expense form
├── manage_expense.php     # Edit/delete expenses
├── login.php              # Login processing
├── logout.php             # Logout handler
├── register.php           # Registration processing
├── config.php             # Database configuration
├── test.php               # Test file
├── css/
│   └── style.css          # Application styling
└── database/
    └── expense_tracker.sql # Database schema & tables
```

## Default Database Configuration

The application uses the following default settings (configured in `config.php`):

| Setting | Value |
|---------|-------|
| **Database Host** | localhost |
| **Database User** | root |
| **Database Password** | (empty) |
| **Database Name** | expense_tracker |

*Note: For local development only. Change these for production use.*

## Troubleshooting

### "Database connection failed"
- Ensure MySQL is running in XAMPP Control Panel
- Check that the `expense_tracker` database was imported
- Verify `config.php` has correct database credentials

### "Page not found" error
- Verify the folder is in `C:\xampp\htdocs\personal-expense-tracker`
- Check that Apache is running
- Clear browser cache and reload

### Port 80 already in use
- Change Apache port in XAMPP settings
- Or stop other services using port 80 (IIS, Skype, etc.)

## Security Notes

⚠️ **Important**: This is a demonstration/learning project.

For production use:
- Use **prepared statements** to prevent SQL injection
- **Sanitize** and **validate** all user inputs
- Implement **password hashing** (bcrypt)
- Add **CSRF token** protection
- Use **HTTPS** instead of HTTP
- Implement **user authorization** checks
- Add **error logging** instead of displaying errors

## Usage Example

1. **Register**: Create a new account with username/password
2. **Add Expense**: Click "Add Expense" and enter details (amount, category, description)
3. **View Dashboard**: See all expenses listed with dates and amounts
4. **Edit/Delete**: Click edit or delete buttons next to any expense
5. **Logout**: Click logout when done

## Support & Feedback

For issues or improvements, review the code comments in each PHP file.

## License

This project is provided as-is for educational purposes.

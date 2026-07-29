# Existing Laravel Asset Listing Application

This is a small Laravel application that displays a list of assets stored in a MariaDB database.

The application is intentionally simple and is meant to represent an existing internal tool. It is functional but not heavily abstracted or over-engineered.

## What the Application Does

- Connects to a MariaDB database via Eloquent
- Retrieves asset records
- Displays them in a basic HTML table

The main listing logic lives in:
- `app/Http/Controllers/AssetController.php` – query logic
- `resources/views/assets/index.blade.php` – rendering the list
- `app/Models/Asset.php` – the Eloquent model

## Requirements

- Docker
- Docker Compose

## Running the Application

```bash
docker compose up --build
```

The app will be available at http://localhost:8000. Migrations and seed data run automatically on container start.

## AI Usage

If you used Claude or another AI tool, include a link to (or export of) the relevant chat/prompt history. See the candidate instructions for what to include and why.

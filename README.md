# Programming Practicals

This repository contains three take-home programming practicals. Each practical is designed to demonstrate your skills in PHP development, data handling, and working with existing codebases. Please follow the instructions for each practical below.

---

## Practical 1: Dockerized PHP Mini Application

**Overview**
Create a small PHP application that manages a simple dataset. The goal is to demonstrate basic application structure, data handling, and comfort working in a containerized environment.

**Requirements**
- PHP
- Dockerized application
- `docker-compose.yml` preferred
- MariaDB-compatible SQL database (SQLite is acceptable)
- A README explaining how to run and use the application

**Functionality**
- Creating records
- Listing records
- Updating an existing record

**Notes**
- Frameworks are optional
- The user interface can be minimal
- Focus on clarity, readability, and maintainability
- You may modify the provided structure or files if needed. If you do, explain why in the README

**Deliverables**
- Source code
- Dockerfile and docker-compose.yml
- README with setup and usage instructions

---

## Practical 2: Reporting-Oriented Data Task

**Overview**
Extend your application from the previous practical, or use a provided dataset, to produce reports intended for administrative users. The goal is to demonstrate your ability to reason about data and produce meaningful summaries.

**Requirements**
- Create one or more reports that answer practical administrative questions, such as:
  - Counts of records grouped by a category (status, department, etc.)
  - Records that have not been updated within a chosen timeframe
  - Summary data that would be useful to an administrator

**Notes**
- Visual presentation is optional
- Focus on clarity and usefulness of the output rather than styling
- You may choose how the report is accessed as long as instructions are clear in README (endpoint, page, or script)

**Deliverables**
- A PHP script or endpoint that outputs structured data (JSON is acceptable)
- A brief explanation of any assumptions made


---

## Practical 3: Extend an Existing Codebase

**Overview**
You will be provided with a small existing PHP project. Your task is to add a specific feature while preserving the current behavior of the application. This exercise is intended to evaluate your ability to work within an existing codebase.

**Task**
Extend the existing listing functionality to support:
- Filtering by date range
- Filtering by category or department

The feature should integrate naturally with the existing application.

**Requirements**
- Keep changes focused and minimal
- Maintain existing behavior
- Do not rewrite the application
- Update or add documentation as needed

**Deliverables**
- Updated source code
- A brief explanation describing what was changed and why

---

## General Instructions

1. Submit your completed exercises via email to: joshe@provo.edu
2. Please submit your work by: 6:00 AM, Thursday, 2/26/26
3. Include a README in each test/project with setup and usage instructions.
4. Ensure your code is clear, readable, and maintainable.
5. If you make any assumptions or modifications, document them clearly.

# ERP System

This is an ERP system that I am building with Laravel as a practical project.

I started this project to get better at building real-world Laravel applications instead of working only on small CRUD projects. While building it, I am focusing on database relationships, business logic, stock management, transactions, authentication, authorization, and keeping the code organized.

The project is still under development, so new modules and improvements will be added over time.

## What I Have Built So Far

### Authentication & Authorization

* User authentication
* Email verification
* Role and permission based access
* User status management

### Product Management

* Category management
* Brand management
* Unit management
* Product management
* Product images
* Product slug
* Opening stock
* Minimum stock level
* Current stock tracking

### Supplier Management

* Supplier management
* Automatic supplier code generation
* Supplier contact information
* Supplier bank accounts
* Primary bank account
* Soft deletes

### Purchase Management

* Create and manage purchases
* Purchase items
* Purchase payments
* Automatic purchase number generation
* Payment status
* Multiple payment methods
* Transaction-based purchase processing

### Stock Management

* Stock adjustments
* Increase / decrease stock
* Stock movement history
* Opening stock
* Purchase stock updates
* Adjustment reasons
* Before and after stock tracking
* Draft, approved and cancelled adjustment states

## How I Structured the Application

One of the main things I wanted to practice in this project was keeping business logic out of the controller as much as possible.

The general flow I am following is:

Request
   ↓
Validation
   ↓
Controller
   ↓
Service
   ↓
Action
   ↓
Repository
   ↓
Model
   ↓
Database


For example, the purchase and stock flow roughly works like this:


Purchase
   ↓
Purchase Items
   ↓
Database Transaction
   ↓
Update Product Stock
   ↓
Create Stock Movement
   ↓
New Current Stock


I am using this approach to make the code easier to maintain and to keep different responsibilities separated.

## Current Modules

* Authentication
* Authorization
* Category
* Brand
* Unit
* Supplier
* Product
* Purchase
* Stock

## Planned Modules

These are the modules I plan to work on next:

* Sales
* Reports
* Attendance
* Activity Log
* Notifications
* PDF / Excel
* Settings
* Deployment

## Tech Stack

### Backend

* PHP
* Laravel
* Laravel Sanctum
* Laravel Fortify

### Database

* MySQL

### Frontend

* Blade
* Livewire
* Tailwind CSS
* JavaScript

### Tools

* Git
* GitHub
* PhpStorm
* PHPUnit

## Database

The project uses MySQL.

Some of the main tables/entities are:

Users
Categories
Brands
Units
Suppliers
Supplier Bank Accounts
Products
Product Images
Purchases
Purchase Items
Purchase Payments
Stock Adjustments
Stock Movements


## Testing

I am gradually adding tests as the project grows.

The main areas I want to cover include:

* Authentication
* Purchase creation
* Purchase payments
* Stock updates
* Stock adjustments
* Stock movements

Testing the purchase and stock flow is especially important because these operations change inventory data.

## Running the Project Locally

### Requirements

* PHP 8.2+
* Composer
* MySQL
* Node.js and npm

## Things I Am Learning From This Project

This project has helped me practice more than just Laravel CRUD.

Some of the main things I am working on are:

* Laravel application structure
* Repository Pattern
* Service Layer
* Action classes
* Dependency Injection
* Eloquent relationships
* Database transactions
* Inventory and stock logic
* Authentication and authorization
* REST API concepts
* Git and GitHub workflow
* Writing code that is easier to maintain

## Project Status

🚧 **Work in Progress**

The main authentication, authorization, product, supplier, purchase, and stock modules are currently implemented.

I am continuing to improve the existing modules before moving on to the remaining parts of the ERP system.

## Author

**Arif Hasan**

Laravel & Vue.js Developer

[GitHub](https://github.com/arifhasan-dev)


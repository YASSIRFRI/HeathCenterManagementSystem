# Health Center Management System

## Overview
The Health Center Management System is a web-based application designed to facilitate the efficient management of pharmaceutical inventory in a college health center. This system offers a range of features including adding new drugs, tracking drug quantities, secure login, report generation, checking drug availability, drug categorization, and managing the removal of expired or damaged drugs.



## Features

1. **Add New Drugs to Inventory**
   - Easily add new drugs to the warehouse inventory to keep stock up-to-date.

2. **Track Quantity of Drugs in Warehouse**
   - Monitor and track the quantity of each drug to prevent shortages of essential medications.

3. **Login to Drug Warehouse Management System**
   - Securely log in with unique credentials to access functionalities based on user roles and permissions.

4. **Generate Reports on Drug Usage and Stock Availability**
   - Generate reports for informed decision-making and budget planning based on drug usage and stock availability.

5. **Check Availability of Specific Drugs**
   - Quickly check the availability of specific drugs in the warehouse, especially in case of emergencies.

6. **Categorize Drugs Based on Therapeutic Class**
   - Efficiently categorize drugs based on their therapeutic class for organized management.

7. **Manage Removal of Expired or Damaged Drugs**
   - Safely manage the removal of expired or damaged drugs from the inventory to prevent their use.




## Technical Details

### Architecture
The system follows the Model-View-Controller (MVC) architecture, ensuring a modular and organized codebase. This separation allows for the independent development of components, making the system more scalable and maintainable.

### Framework and Dependencies
The system is built using the Laravel framework, a powerful PHP framework known for its elegance and simplicity. Laravel's dependency injection container is leveraged for managing class dependencies, enhancing the system's flexibility and testability.

### Eloquent Models
Laravel's Eloquent ORM (Object-Relational Mapping) is used for database interaction. Eloquent provides a simple, expressive syntax for defining database models, making it easier to interact with the database without writing complex SQL queries.

### Blade Views
The system's user interface is implemented using Laravel's Blade templating engine. Blade offers a clean, yet powerful, template syntax that simplifies the process of creating views and ensures a consistent and maintainable user interface.

### Migrations
Database migrations are utilized to version-control the database schema. This allows for seamless updates to the database structure as the application evolves, ensuring that the system can be easily adapted to changing requirements.

### Middlewares
Laravel's middleware system is employed to filter HTTP requests entering the application. Middleware provides a convenient mechanism for filtering requests before they reach the application's routes, enabling the implementation of features like secure authentication and authorization.


### Design Patterns in Laravel

#### 1. **Factory Design Pattern**
   - Laravel utilizes the Factory design pattern for the creation of objects. Factories are used to generate instances of classes, promoting a clean and centralized approach to object creation. In the Health Center Management System, factories may be employed in the creation of complex objects, such as drug instances.

#### 2. **Singleton Design Pattern**
   - The Singleton pattern ensures that a class has only one instance and provides a global point of access to that instance. While Laravel itself doesn't heavily rely on Singleton due to its dependency injection system, developers may choose to use it where appropriate. For example, a singleton pattern might be applied to a class responsible for managing system-wide configurations.

#### 3. **DAO (Data Access Object) Design Pattern**
   - Laravel's Eloquent ORM can be considered an implementation of the DAO pattern. Eloquent provides a structured way to access the database, abstracting away the underlying SQL queries. This pattern is used throughout the system for database interactions, allowing for a more object-oriented approach to handling data.

#### 4. **State Design Pattern**
   - The State pattern is employed in Laravel through its various stateful services. For instance, Laravel's authentication system utilizes different states such as logged in, logged out, etc. The Health Center Management System may use the state pattern in areas involving user authentication and authorization.

### Testing (Test-Driven Development - TDD)

#### Test-Driven Development (TDD)
   - The Health Center Management System follows Test-Driven Development principles. This means that tests are written before the actual code implementation. PHPUnit, Laravel's testing framework, is used for creating unit tests, ensuring the reliability and robustness of the system.

#### Types of Tests
   - **Unit Tests:** Test individual components and functions in isolation.
   - **Feature Tests:** Ensure that features of the system work as expected.
   - **Integration Tests:** Check how different components work together.
   - **Browser Tests:** Simulate user interactions through the application's UI.




## Deployment
Refer to the `deployment.txt` file included in the project for detailed instructions on deploying the Health Center Management System. This file contains step-by-step guidelines to ensure a smooth deployment process, covering aspects such as server configuration, database setup, and environment configuration.

For any further assistance or troubleshooting during deployment, please refer to the system's documentation or contact the system administrator.
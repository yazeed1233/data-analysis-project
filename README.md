# Dictionary Web Application

## Description
This is a simple dictionary web application that allows users to input a word and retrieve its meaning from a database. The project demonstrates the automation of software development and deployment processes using DevOps practices. 

## Project Supervisor
- **Dr. Ahmed Awad**

## Requirements
To run this project, the following tools and technologies are required:
- **Operating System:** Ubuntu/Linux
- **Development Tools:**
  - Docker & Docker Compose
  - Jenkins
  - Git
  - Apache2
  - PHP
  - MySQL
- **Other Tools:** Bash scripting

## Setup Instructions
Follow these steps to set up and run the project:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yazeed1233/data-analysis-project.git
   ```

2. **Navigate to the project directory:**
   ```bash
   cd data-analysis-project
   ```

3. **Run the Docker containers:**
   ```bash
   docker-compose up -d
   ```

4. **Access the application in your browser:**
   - URL: `http://192.168.1.22:8380`

## Project Structure
The project is organized as follows:

- **`docker-compose.yml`:** Configures the application and database containers.
- **`Dockerfile`:** Sets up the Apache and PHP environment.
- **`index.php`:** Handles user input and queries the database.
- **`dump.sql`:** SQL script for creating and populating the database with sample data.
- **`script.sh`:** Bash script to automate Git commits and trigger Jenkins builds.
- **`Jenkinsfile`:** Pipeline script for automating the deployment of the application.

## Example Usage
1. Open the application in your browser.
2. Enter a word (e.g., "apple") in the search box.
3. Click **Search**.
4. The application will display the definition (e.g., "A fruit that is typically red, green, or yellow.").

## Contributors
- **Yazeed Rashed**
- **Mahdy Adel**

## Notes
- For any questions or issues, please contact the contributors.

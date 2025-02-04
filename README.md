# HNG12 Backend Stage 0 - Public API  

## Project Description  
This is a simple public API built using PHP for the HNG12 Stage 0 Backend Task. The API returns a JSON response containing:  
- My registered email address on the HNG12 Slack workspace.  
- The current date and time in ISO 8601 format (UTC).  
- The GitHub repository URL of this project.  

The API is designed to be lightweight and adheres to the required specifications, including proper CORS handling and HTTP status codes.  


## Getting Started  
### 1. Prerequisites  
Ensure you have the following installed:  
- PHP (7.4 or higher)  
- XAMPP (for Apache & PHP)
- Postman (for testing APIs)


## Setup Instructions  
### 1. Clone the Repository  
```
  git clone https://github.com/yourusername/your-repo.git
  cd your-repo
```
### 2. Move Project to XAMPP htdocs Directory  
Copy the project folder to:  
```
C:\xampp\htdocs\hng12-backend-task
```
### 3. Start XAMPP and Run Apache  
- Open XAMPP Control Panel.  
- Start the Apache server.  
### 4. Test Locally  
Open your browser and visit:  
```
http://localhost/hng12-backend-task/index.php
```
or use Postman to send a GET request to the same URL.  


## API Documentation  

### 1. Endpoint  
```
GET /index.php
```
Example (if hosted online):  
```
GET https://your-deployed-api.com/index.php
```

### 2. Request Format  
- Method: GET  
- Headers: None required  

### 3. Response Format  
- Status Code: 200 OK  
- Content-Type: application/json  



## Example Response (JSON):  
```json
{
  "email": "your-email@example.com",
  "current_datetime": "2025-01-30T09:30:00Z",
  "github_url": "https://github.com/yourusername/your-repo"
}
```


## Relevant Links  
- Project Repository: [https://github.com/yourusername/your-repo](https://github.com/Malkayne/HNG-12-Backend-0)  
- Hire PHP Developers: [https://hng.tech/hire/php-developers](https://hng.tech/hire/php-developers)  



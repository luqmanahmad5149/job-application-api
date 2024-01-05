# job-application-api
Laravel Restful API Test for Pixl8.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tools needed before building and running the app
1. Source Tree.
2. Postman.
3. Docker.

## Instruction for running and building the app
1. Open Source Tree.
2. Clone from URL:
    1. Source URL: https://github.com/luqmanahmad5149/job-application-api.git
    2. Destination Path: /Users/Shared/job-application-api
    3. Name: job-application-api
    4. Checkout branch: main
3. Open terminal.
4. Go to the project directory using this command **“cd Users/Shared/job-application-api”**.
5. Type **“make setup”**. This command will build a docker image and execute the necessary script.
6. Create a .env file inside the project root.
7. Copy and paste the .env.example file content into the .env file.
8. Now you can open this URL “http://localhost:9000/“ and the home page will be shown. (This is to check if the container is running successfully)
9. For unit test execution, please enter the docker container first using this command **“docker exec -it job-application-api bash”**. Then, execute the unit test using this script **“php artisan test”**.

## Instruction for Testing the app
1. Download this postman collection for the job-application API “https://drive.google.com/drive/folders/1czQRlaOIh8ZkB8kS9IHBDhf2UwWXoXHv?usp=sharing”.
2. Import the collection inside your Postman.
3. Now you have the job-application API collection.
4. Now you can test all APIs using the API collection provided.

## API Interface Documentation
| HTTP Request | Endpoint                          | Description                                   |
| :---:        | :---:                             | :---:                                         |
| POST         |  api/v1/submit_job_application    |  Submit a job application.                    |


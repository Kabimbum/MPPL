<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #e0ecf8, #f9fbfc);
        margin: 0;
        padding: 0;
    }

    .ktm-card-container {
        display: flex;
        flex-direction: row; 
        flex-wrap: wrap; 
        justify-content: center;
        align-items: flex-start;
        gap: 20px; 
        padding: 20px;
    }

    .ktm-card {
        background: linear-gradient(145deg, #ffffff, #fbe3e8, #e5e3fb, #d2e8fd); 
        padding: 35px 30px;
        border-radius: 20px;
        box-shadow: 0px 12px 30px rgba(0, 0, 0, 0.15);
        width: 100%;
        max-width: 480px;
        height: 650px;
        transition: transform 0.3s ease;
        text-align: center;

        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center
    }

    .ktm-card:hover {
        transform: translateY(-5px);
    }

    .ktm-card-header {
        margin-bottom: 25px;
        color: #0d6efd;
        border-bottom: 2px solid #e0e0e0;
        padding-bottom: 10px;
    }

    .ktm-card-header h1 {
        font-size: 26px;
        font-weight: 600;
        margin: 0;
    }

    .ktm-image {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid #0d6efd;
        margin: 20px auto;
        display: block;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        max-width: 100%;
        max-height: 100%;
    }

    .ktm-details {
        text-align: center; 
        margin-bottom: 20px;
        color: #333;
        font-size: 15px;
        width: 100%;
    }

    .ktm-details p {
        margin: 8px 0;
        line-height: 1.5;
    }

    .ktm-footer {
        margin-top: 25px;
        font-size: 13px;
        color: #777;
        text-align: center;
    }

    .download-btn {
        margin-top: 25px;
    }

    .download-btn button {
        background-color: #0d6efd;
        color: #fff;
        border: none;
        padding: 10px 25px;
        border-radius: 30px;
        cursor: pointer;
        font-size: 14px;
        font-weight: 500;
        transition: background-color 0.3s ease;
    }

    .download-btn button:hover {
    background-color: #084298;
    }

    .ktm-card-wrapper {
    display: flex;
    flex-wrap: wrap;
    justify-content: center; 
    gap: 20px; 
    padding: 20px;
}
</style>

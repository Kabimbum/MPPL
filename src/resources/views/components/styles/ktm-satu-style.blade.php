<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

body {
    font-family: 'Poppins', sans-serif;
    background:
      url('https://www.transparenttextures.com/patterns/cartographer.png') repeat,
      linear-gradient(rgba(224, 236, 248, 0.3), rgba(255, 255, 255, 0.3));
    background-blend-mode: lighten;
    margin: 0;
    padding: 0;
    min-height: 100vh;
}

/* Container Tengah */
.ktm-card-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
}

/* Kartu KTM */
.ktm-card {
    background: #ffffff; /* putih polos */
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
    align-items: center;
    color: #004aad; /* warna teks utama */
}

.ktm-card:hover {
    transform: translateY(-5px);
}

/* Header */
.ktm-card-header {
    margin-bottom: 25px;
    color: #004aad; /* teks biru */
    border-bottom: 2px solid #004aad; /* border biru */
    padding-bottom: 10px;
}

.ktm-card-header h1 {
    font-size: 26px;
    font-weight: 600;
    margin: 0;
    color: #004aad;
}

/* Gambar Profil */
.ktm-image {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid #004aad; /* border biru */
    margin: 20px auto;
    display: block;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    max-width: 100%;
    max-height: 100%;
}

/* Detail */
.ktm-details {
    text-align: center; 
    margin-bottom: 20px;
    color: #004aad; /* teks biru */
    font-size: 15px;
    width: 100%;
}

.ktm-details p {
    margin: 8px 0;
    line-height: 1.5;
}

/* Footer */
.ktm-footer {
    margin-top: 25px;
    font-size: 13px;
    color: #004aad; /* teks biru */
    text-align: center;
}

/* Tombol */
.download-btn {
    margin-top: 25px;
}

.download-btn button {
    background-color: #004aad; /* tombol biru */
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
    background-color: #002a6b; /* hover warna biru gelap */
}

</style>

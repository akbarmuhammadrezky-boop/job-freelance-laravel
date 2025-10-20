<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Job Freelance Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <title>Job Freelance Platform</title>
<style>
    /* Styling Kartu Kategori */
    .category-card {
        background-color: #fff;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        height: 100%; /* Membuat semua kartu sama tinggi */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    /* Efek hover pada kartu */
    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    /* Menghilangkan garis bawah pada link */
    .category-card-link {
        text-decoration: none;
        color: inherit; /* Mewarisi warna teks normal */
    }

    /* Styling Ikon (Lingkaran) */
    .card-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto; /* Posisi di tengah */
    }

    /* Styling Ikon (Font Awesome) */
    .card-icon i {
        font-size: 32px;
    }

    /* Judul Kategori */
    .category-card h4 {
        font-size: 1.25rem;
        font-weight: 700;
        color: #333;
    }

    /* Deskripsi Kategori */
    .card-desc {
        font-size: 0.9rem;
        color: #666;
        min-height: 50px; /* Jaga tinggi deskripsi agar rapi */
    }

    /* Info (Openings, Assignment) */
    .card-info {
        font-size: 0.9rem;
        font-weight: 600;
        color: #555;
    }

    /* Styling Tombol Kategori */
    .btn-category {
        border-radius: 20px; /* Tombol rounded */
        padding: 8px 24px;
        font-weight: 600;
        color: #fff;
        border: none;
    }

    /* --- SKEMA WARNA UNIK UNTUK SETIAP KARTU --- */

    /* 1. Entry (Merah Muda) */
    .icon-entry { background-color: #fdeeee; }
    .icon-entry i { color: #f06a78; }
    .btn-entry { background-color: #f06a78; }
    .btn-entry:hover { background-color: #e84a5c; }

    /* 2. Micro (Biru Tua) */
    .icon-micro { background-color: #eef2ff; }
    .icon-micro i { color: #3b30c9; }
    .btn-micro { background-color: #3b30c9; }
    .btn-micro:hover { background-color: #3a30a8; }

    /* 3. Virtual (Merah Cerah) */
    .icon-virtual { background-color: #fdeeee; }
    .icon-virtual i { color: #d90429; }
    .btn-virtual { background-color: #d90429; }
    .btn-virtual:hover { background-color: #c82333; }

    /* 4. Writing (Hijau) */
    .icon-writing { background-color: #edfcf1; }
    .icon-writing i { color: #16a34a; }
    .btn-writing { background-color: #16a34a; }
    .btn-writing:hover { background-color: #157347; }

    /* 5. Testing (Biru Langit) */
    .icon-testing { background-color: #e0f2fe; }
    .icon-testing i { color: #0ea5e9; }
    .btn-testing { background-color: #0ea5e9; }
    .btn-testing:hover { background-color: #0c87bf; }

    /* 6. Designing (Kuning/Oranye) */
    .icon-designing { background-color: #fffbeb; }
    .icon-designing i { color: #f59e0b; }
    .btn-designing { background-color: #f59e0b; }
    .btn-designing:hover { background-color: #d97706; }

    /* 7. Marketing (Ungu/Magenta) */
    .icon-marketing { background-color: #fdf2f8; }
    .icon-marketing i { color: #d946ef; }
    .btn-marketing { background-color: #d946ef; }
    .btn-marketing:hover { background-color: #c026d3; }

    /* 8. Managerial (Biru Kehijauan/Teal) */
    .icon-managerial { background-color: #f0fdfa; }
    .icon-managerial i { color: #14b8a6; }
    .btn-managerial { background-color: #14b8a6; }
    .btn-managerial:hover { background-color: #0d9488; }

    /* 9. Developer (Merah Marun) */
    .icon-developer { background-color: #fef2f2; }
    .icon-developer i { color: #b91c1c; }
    .btn-developer { background-color: #b91c1c; }
    .btn-developer:hover { background-color: #991b1b; }

    /* 10. Finance (Hijau Cerah) */
    .icon-finance { background-color: #f0fdf4; }
    .icon-finance i { color: #22c55e; }
    .btn-finance { background-color: #22c55e; }
    .btn-finance:hover { background-color: #16a34a; }

    /* 11. Coaching (Biru Kobalt) */
    .icon-coaching { background-color: #eef2ff; }
    .icon-coaching i { color: #4338ca; }
    .btn-coaching { background-color: #4338ca; }
    .btn-coaching:hover { background-color: #3730a3; }

    /* 12. Other (Abu-abu) */
    .icon-other { background-color: #f8f9fa; }
    .icon-other i { color: #6c757d; }
    .btn-other { background-color: #6c757d; }
    .btn-other:hover { background-color: #5a6268; }

    /* --- SKEMA WARNA UNTUK SUB-KATEGORI ENTRY LEVEL --- */

/* 13. Game (Merah Marun) */
.icon-game { background-color: #fef2f2; }
.icon-game i { color: #b91c1c; }
.btn-game { background-color: #b91c1c; }
.btn-game:hover { background-color: #991b1b; }

/* 14. Video (Merah Cerah) */
.icon-video { background-color: #fdeeee; }
.icon-video i { color: #d90429; }
.btn-video { background-color: #d90429; }
.btn-video:hover { background-color: #c82333; }

/* 15. Email (Biru Langit) */
.icon-email { background-color: #e0f2fe; }
.icon-email i { color: #0ea5e9; }
.btn-email { background-color: #0ea5e9; }
.btn-email:hover { background-color: #0c87bf; }

/* 16. Captcha (Abu-abu) */
.icon-captcha { background-color: #f8f9fa; }
.icon-captcha i { color: #6c757d; }
.btn-captcha { background-color: #6c757d; }
.btn-captcha:hover { background-color: #5a6268; }

/* 17. Copy/Paste (Biru Tua) */
.icon-copy { background-color: #eef2ff; }
.icon-copy i { color: #3b30c9; }
.btn-copy { background-color: #3b30c9; }
.btn-copy:hover { background-color: #3a30a8; }

/* 18. Advertising (Ungu/Magenta) */
.icon-ad { background-color: #fdf2f8; }
.icon-ad i { color: #d946ef; }
.btn-ad { background-color: #d946ef; }
.btn-ad:hover { background-color: #c026d3; }

/* --- SKEMA WARNA UNTUK SUB-KATEGORI MICRO JOBS --- */

/* 19. Data Entry (Biru Tua) */
.icon-data-entry { background-color: #eef2ff; }
.icon-data-entry i { color: #3b30c9; }
.btn-data-entry { background-color: #3b30c9; }
.btn-data-entry:hover { background-color: #3a30a8; }

/* 20. Form Filling (Biru Langit) */
.icon-form-filling { background-color: #e0f2fe; }
.icon-form-filling i { color: #0ea5e9; }
.btn-form-filling { background-color: #0ea5e9; }
.btn-form-filling:hover { background-color: #0c87bf; }

/* 21. Research (Hijau Cerah) */
.icon-research { background-color: #f0fdf4; }
.icon-research i { color: #22c55e; }
.btn-research { background-color: #22c55e; }
.btn-research:hover { background-color: #16a34a; }

/* 22. Survey (Kuning/Oranye) */
.icon-survey { background-color: #fffbeb; }
.icon-survey i { color: #f59e0b; }
.btn-survey { background-color: #f59e0b; }
.btn-survey:hover { background-color: #d97706; }

/* 23. Typing (Abu-abu) */
.icon-typing { background-color: #f8f9fa; }
.icon-typing i { color: #6c757d; }
.btn-typing { background-color: #6c757d; }
.btn-typing:hover { background-color: #5a6268; }

/* 24. Scraping (Biru Kehijauan/Teal) */
.icon-scraping { background-color: #f0fdfa; }
.icon-scraping i { color: #14b8a6; }
.btn-scraping { background-color: #14b8a6; }
.btn-scraping:hover { background-color: #0d9488; }

/* --- SKEMA WARNA UNTUK SUB-KATEGORI VIRTUAL JOBS --- */

/* 25. Proofreading (Merah Cerah) */
.icon-proofreading { background-color: #fdeeee; }
.icon-proofreading i { color: #d90429; }
.btn-proofreading { background-color: #d90429; }
.btn-proofreading:hover { background-color: #c82333; }

/* 26. Transcription (Abu-abu) */
.icon-transcription { background-color: #f8f9fa; }
.icon-transcription i { color: #6c757d; }
.btn-transcription { background-color: #6c757d; }
.btn-transcription:hover { background-color: #5a6268; }

/* 27. Translator (Biru Tua) */
.icon-translator { background-color: #eef2ff; }
.icon-translator i { color: #3b30c9; }
.btn-translator { background-color: #3b30c9; }
.btn-translator:hover { background-color: #3a30a8; }

/* 28. Tutoring (Merah Marun) */
.icon-tutoring { background-color: #fef2f2; }
.icon-tutoring i { color: #b91c1c; }
.btn-tutoring { background-color: #b91c1c; }
.btn-tutoring:hover { background-color: #991b1b; }

/* 29. Virtual Assistant (Kuning/Oranye) */
.icon-va { background-color: #fffbeb; }
.icon-va i { color: #f59e0b; }
.btn-va { background-color: #f59e0b; }
.btn-va:hover { background-color: #d97706; }

/* 30. Administrative (Biru Kehijauan/Teal) */
.icon-admin { background-color: #f0fdfa; }
.icon-admin i { color: #14b8a6; }
.btn-admin { background-color: #14b8a6; }
.btn-admin:hover { background-color: #0d9488; }

/* 31. Customer Support (Merah Cerah - Ulang) */
.icon-customer-support { background-color: #fdeeee; }
.icon-customer-support i { color: #d90429; }
.btn-customer-support { background-color: #d90429; }
.btn-customer-support:hover { background-color: #c82333; }

/* 32. Office Assistant (Biru Langit) */
.icon-office-assistant { background-color: #e0f2fe; }
.icon-office-assistant i { color: #0ea5e9; }
.btn-office-assistant { background-color: #0ea5e9; }
.btn-office-assistant:hover { background-color: #0c87bf; }

/* 33. Receptionist (Abu-abu - Ulang) */
.icon-receptionist { background-color: #f8f9fa; }
.icon-receptionist i { color: #6c757d; }
.btn-receptionist { background-color: #6c757d; }
.btn-receptionist:hover { background-color: #5a6268; }

/* 34. Accountant (Hijau Cerah) */
.icon-accountant { background-color: #f0fdf4; }
.icon-accountant i { color: #22c55e; }
.btn-accountant { background-color: #22c55e; }
.btn-accountant:hover { background-color: #16a34a; }

/* 35. Recruiting (Biru Kobalt) */
.icon-recruiting { background-color: #eef2ff; }
.icon-recruiting i { color: #4338ca; }
.btn-recruiting { background-color: #4338ca; }
.btn-recruiting:hover { background-color: #3730a3; }

/* 36. Voiceover Artist (Ungu/Magenta) */
.icon-voiceover { background-color: #fdf2f8; }
.icon-voiceover i { color: #d946ef; }
.btn-voiceover { background-color: #d946ef; }
.btn-voiceover:hover { background-color: #c026d3; }

/* --- SKEMA WARNA UNTUK SUB-KATEGORI WRITING JOBS --- */

/* 37. Article (Hijau - Ulang) */
.icon-article { background-color: #edfcf1; }
.icon-article i { color: #16a34a; }
.btn-article { background-color: #16a34a; }
.btn-article:hover { background-color: #157347; }

/* 38. Content (Biru Langit - Ulang) */
.icon-content { background-color: #e0f2fe; }
.icon-content i { color: #0ea5e9; }
.btn-content { background-color: #0ea5e9; }
.btn-content:hover { background-color: #0c87bf; }

/* 39. Copywriting (Kuning/Oranye - Ulang) */
.icon-copywriting { background-color: #fffbeb; }
.icon-copywriting i { color: #f59e0b; }
.btn-copywriting { background-color: #f59e0b; }
.btn-copywriting:hover { background-color: #d97706; }

/* 40. E-Book (Merah Cerah - Ulang) */
.icon-ebook { background-color: #fdeeee; }
.icon-ebook i { color: #d90429; }
.btn-ebook { background-color: #d90429; }
.btn-ebook:hover { background-color: #c82333; }

/* 41. Ghostwriting (Abu-abu - Ulang) */
.icon-ghostwriting { background-color: #f8f9fa; }
.icon-ghostwriting i { color: #6c757d; }
.btn-ghostwriting { background-color: #6c757d; }
.btn-ghostwriting:hover { background-color: #5a6268; }

/* 42. Blog (Oranye - dari Gbr 2) */
.icon-blog { background-color: #fffbeb; } /* Menggunakan warna kuning/oranye */
.icon-blog i { color: #f59e0b; }
.btn-blog { background-color: #f59e0b; }
.btn-blog:hover { background-color: #d97706; }

/* 43. Resume (Biru Kehijauan/Teal - Ulang) */
.icon-resume { background-color: #f0fdfa; }
.icon-resume i { color: #14b8a6; }
.btn-resume { background-color: #14b8a6; }
.btn-resume:hover { background-color: #0d9488; }

/* 44. Script (Ungu/Magenta - Ulang) */
.icon-script { background-color: #fdf2f8; }
.icon-script i { color: #d946ef; }
.btn-script { background-color: #d946ef; }
.btn-script:hover { background-color: #c026d3; }

/* 45. Technical (Biru Tua - Ulang) */
.icon-technical { background-color: #eef2ff; }
.icon-technical i { color: #3b30c9; }
.btn-technical { background-color: #3b30c9; }
.btn-technical:hover { background-color: #3a30a8; }

/* --- SKEMA WARNA UNTUK SUB-KATEGORI TESTING JOBS --- */

/* 46. Game Testing (Biru Langit - Ulang) */
.icon-game-testing { background-color: #e0f2fe; }
.icon-game-testing i { color: #0ea5e9; }
.btn-game-testing { background-color: #0ea5e9; }
.btn-game-testing:hover { background-color: #0c87bf; }

/* 47. App Testing (Kuning/Oranye - Ulang) */
.icon-app-testing { background-color: #fffbeb; }
.icon-app-testing i { color: #f59e0b; }
.btn-app-testing { background-color: #f59e0b; }
.btn-app-testing:hover { background-color: #d97706; }

/* 48. Software Testing (Biru Kehijauan/Teal - Ulang) */
.icon-software-testing { background-color: #f0fdfa; }
.icon-software-testing i { color: #14b8a6; }
.btn-software-testing { background-color: #14b8a6; }
.btn-software-testing:hover { background-color: #0d9488; }

/* 49. Website Testing (Merah Cerah - Ulang) */
.icon-website-testing { background-color: #fdeeee; }
.icon-website-testing i { color: #d90429; }
.btn-website-testing { background-color: #d90429; }
.btn-website-testing:hover { background-color: #c82333; }

/* 50. Product Testing (Ungu/Magenta - Ulang) */
.icon-product-testing { background-color: #fdf2f8; }
.icon-product-testing i { color: #d946ef; }
.btn-product-testing { background-color: #d946ef; }
.btn-product-testing:hover { background-color: #c026d3; } 

/* --- SKEMA WARNA UNTUK SUB-KATEGORI DESIGNING JOBS --- */

/* 51. Graphic Designing (Kuning/Oranye) */
.icon-graphic-design { background-color: #fffbeb; }
.icon-graphic-design i { color: #f59e0b; }
.btn-graphic-design { background-color: #f59e0b; }
.btn-graphic-design:hover { background-color: #d97706; }

/* 52. Photo Editing (Abu-abu) */
.icon-photo-editing { background-color: #f8f9fa; }
.icon-photo-editing i { color: #6c757d; }
.btn-photo-editing { background-color: #6c757d; }
.btn-photo-editing:hover { background-color: #5a6268; }

/* 53. Video Editing (Merah Cerah) */
.icon-video-editing { background-color: #fdeeee; }
.icon-video-editing i { color: #d90429; }
.btn-video-editing { background-color: #d90429; }
.btn-video-editing:hover { background-color: #c82333; }

/* 54. Web Designing (Biru Langit) */
.icon-web-designing { background-color: #e0f2fe; }
.icon-web-designing i { color: #0ea5e9; }
.btn-web-designing { background-color: #0ea5e9; }
.btn-web-designing:hover { background-color: #0c87bf; }

/* 55. Animation (Ungu/Magenta) */
.icon-animation { background-color: #fdf2f8; }
.icon-animation i { color: #d946ef; }
.btn-animation { background-color: #d946ef; }
.btn-animation:hover { background-color: #c026d3; }

/* 56. Banner Designing (Biru Kehijauan/Teal) */
.icon-banner-designing { background-color: #f0fdfa; }
.icon-banner-designing i { color: #14b8a6; }
.btn-banner-designing { background-color: #14b8a6; }
.btn-banner-designing:hover { background-color: #0d9488; }

/* 57. Logo Designing (Merah Marun) */
.icon-logo-designing { background-color: #fef2f2; }
.icon-logo-designing i { color: #b91c1c; }
.btn-logo-designing { background-color: #b91c1c; }
.btn-logo-designing:hover { background-color: #991b1b; }

/* 58. Multimedia (Merah Muda) */
.icon-multimedia { background-color: #fdeeee; }
.icon-multimedia i { color: #f06a78; }
.btn-multimedia { background-color: #f06a78; }
.btn-multimedia:hover { background-color: #e84a5c; }

/* 59. Digital Artist (Ungu/Magenta - Ulang) */
.icon-digital-artist { background-color: #fdf2f8; }
.icon-digital-artist i { color: #d946ef; }
.btn-digital-artist { background-color: #d946ef; }
.btn-digital-artist:hover { background-color: #c026d3; }

/* 60. Front End (Biru Tua) */
.icon-frontend { background-color: #eef2ff; }
.icon-frontend i { color: #3b30c9; }
.btn-frontend { background-color: #3b30c9; }
.btn-frontend:hover { background-color: #3a30a8; }

/* 61. UX/UI (Biru Kobalt) */
.icon-ux-ui { background-color: #eef2ff; }
.icon-ux-ui i { color: #4338ca; }
.btn-ux-ui { background-color: #4338ca; }
.btn-ux-ui:hover { background-color: #3730a3; }

/* --- SKEMA WARNA UNTUK SUB-KATEGORI MARKETING JOBS --- */

/* 62. Content Marketing (Biru Langit) */
.icon-content-marketing { background-color: #e0f2fe; }
.icon-content-marketing i { color: #0ea5e9; }
.btn-content-marketing { background-color: #0ea5e9; }
.btn-content-marketing:hover { background-color: #0c87bf; }

/* 63. Digital Marketing (Merah Cerah) */
.icon-digital-marketing { background-color: #fdeeee; }
.icon-digital-marketing i { color: #d90429; }
.btn-digital-marketing { background-color: #d90429; }
.btn-digital-marketing:hover { background-color: #c82333; }

/* 64. Email Marketing (Hijau Cerah) */
.icon-email-marketing { background-color: #f0fdf4; }
.icon-email-marketing i { color: #22c55e; }
.btn-email-marketing { background-color: #22c55e; }
.btn-email-marketing:hover { background-color: #16a34a; }

/* 65. Consultant (Kuning/Oranye) */
.icon-consultant { background-color: #fffbeb; }
.icon-consultant i { color: #f59e0b; }
.btn-consultant { background-color: #f59e0b; }
.btn-consultant:hover { background-color: #d97706; }

/* 66. PPC (Ungu/Magenta) */
.icon-ppc { background-color: #fdf2f8; }
.icon-ppc i { color: #d946ef; }
.btn-ppc { background-color: #d946ef; }
.btn-ppc:hover { background-color: #c026d3; }

/* 67. SEO (Biru Kehijauan/Teal) */
.icon-seo { background-color: #f0fdfa; }
.icon-seo i { color: #14b8a6; }
.btn-seo { background-color: #14b8a6; }
.btn-seo:hover { background-color: #0d9488; }

/* 68. Social Media (Merah Marun) */
.icon-social { background-color: #fef2f2; }
.icon-social i { color: #b91c1c; }
.btn-social { background-color: #b91c1c; }
.btn-social:hover { background-color: #991b1b; }

/* 69. Influencer (Merah Muda) */
.icon-influencer { background-color: #fdeeee; }
.icon-influencer i { color: #f06a78; }
.btn-influencer { background-color: #f06a78; }
.btn-influencer:hover { background-color: #e84a5c; }

/* 70. Internet (Biru Kobalt) */
.icon-internet { background-color: #eef2ff; }
.icon-internet i { color: #4338ca; }
.btn-internet { background-color: #4338ca; }
.btn-internet:hover { background-color: #3730a3; }

/* 71. Telemarketing (Abu-abu) */
.icon-telemarketing { background-color: #f8f9fa; }
.icon-telemarketing i { color: #6c757d; }
.btn-telemarketing { background-color: #6c757d; }
.btn-telemarketing:hover { background-color: #5a6268; }

/* 72. Video Marketing (Merah Cerah - Ulang) */
.icon-video-marketing { background-color: #fdeeee; }
.icon-video-marketing i { color: #d90429; }
.btn-video-marketing { background-color: #d90429; }
.btn-video-marketing:hover { background-color: #c82333; }

/* 73. Web Analyst (Biru Tua) */
.icon-analyst { background-color: #eef2ff; }
.icon-analyst i { color: #3b30c9; }
.btn-analyst { background-color: #3b30c9; }
.btn-analyst:hover { background-color: #3a30a8; }

/* --- SKEMA WARNA UNTUK SUB-KATEGORI MANAGERIAL JOBS --- */

/* 74. Accounts Manager (Hijau Cerah) */
.icon-accounts-manager { background-color: #f0fdf4; }
.icon-accounts-manager i { color: #22c55e; }
.btn-accounts-manager { background-color: #22c55e; }
.btn-accounts-manager:hover { background-color: #16a34a; }

/* 75. Office Manager (Biru Langit) */
.icon-office-manager { background-color: #e0f2fe; }
.icon-office-manager i { color: #0ea5e9; }
.btn-office-manager { background-color: #0ea5e9; }
.btn-office-manager:hover { background-color: #0c87bf; }

/* 76. Program Manager (Merah Cerah) */
.icon-program-manager { background-color: #fdeeee; }
.icon-program-manager i { color: #d90429; }
.btn-program-manager { background-color: #d90429; }
.btn-program-manager:hover { background-color: #c82333; }

/* 77. Sales Manager (Kuning/Oranye) */
.icon-sales-manager { background-color: #fffbeb; }
.icon-sales-manager i { color: #f59e0b; }
.btn-sales-manager { background-color: #f59e0b; }
.btn-sales-manager:hover { background-color: #d97706; }

/* 78. Social Media Manager (Ungu/Magenta) */
.icon-social-manager { background-color: #fdf2f8; }
.icon-social-manager i { color: #d946ef; }
.btn-social-manager { background-color: #d946ef; }
.btn-social-manager:hover { background-color: #c026d3; }

/* 79. Development Manager (Biru Tua) */
.icon-dev-manager { background-color: #eef2ff; }
.icon-dev-manager i { color: #3b30c9; }
.btn-dev-manager { background-color: #3b30c9; }
.btn-dev-manager:hover { background-color: #3a30a8; }

/* 80. Reputation Manager (Abu-abu) */
.icon-reputation-manager { background-color: #f8f9fa; }
.icon-reputation-manager i { color: #6c757d; }
.btn-reputation-manager { background-color: #6c757d; }
.btn-reputation-manager:hover { background-color: #5a6268; }

/* 81. Portfolio Manager (Biru Kehijauan/Teal) */
.icon-portfolio-manager { background-color: #f0fdfa; }
.icon-portfolio-manager i { color: #14b8a6; }
.btn-portfolio-manager { background-color: #14b8a6; }
.btn-portfolio-manager:hover { background-color: #0d9488; }

/* 82. Project Manager (Biru Kobalt) */
.icon-project-manager { background-color: #eef2ff; }
.icon-project-manager i { color: #4338ca; }
.btn-project-manager { background-color: #4338ca; }
.btn-project-manager:hover { background-color: #3730a3; }

/* 83. Risk Manager (Merah Marun) */
.icon-risk-manager { background-color: #fef2f2; }
.icon-risk-manager i { color: #b91c1c; }
.btn-risk-manager { background-color: #b91c1c; }
.btn-risk-manager:hover { background-color: #991b1b; }

/* --- SKEMA WARNA UNTUK SUB-KATEGORI DEVELOPER JOBS --- */

/* 84. Blockchain (Biru Tua) */
.icon-blockchain { background-color: #eef2ff; }
.icon-blockchain i { color: #3b30c9; }
.btn-blockchain { background-color: #3b30c9; }
.btn-blockchain:hover { background-color: #3a30a8; }

/* 85. Smart Contract (Abu-abu) */
.icon-smart-contract { background-color: #f8f9fa; }
.icon-smart-contract i { color: #6c757d; }
.btn-smart-contract { background-color: #6c757d; }
.btn-smart-contract:hover { background-color: #5a6268; }

/* 86. Software Dev (Biru Kehijauan/Teal) */
.icon-software-dev { background-color: #f0fdfa; }
.icon-software-dev i { color: #14b8a6; }
.btn-software-dev { background-color: #14b8a6; }
.btn-software-dev:hover { background-color: #0d9488; }

/* 87. Back End (Merah Marun) */
.icon-backend-dev { background-color: #fef2f2; }
.icon-backend-dev i { color: #b91c1c; }
.btn-backend-dev { background-color: #b91c1c; }
.btn-backend-dev:hover { background-color: #991b1b; }

/* 88. Full Stack (Ungu/Magenta) */
.icon-fullstack-dev { background-color: #fdf2f8; }
.icon-fullstack-dev i { color: #d946ef; }
.btn-fullstack-dev { background-color: #d946ef; }
.btn-fullstack-dev:hover { background-color: #c026d3; }

/* --- SKEMA WARNA UNTUK SUB-KATEGORI FINANCE JOBS --- */

/* 89. Crypto (Kuning/Oranye) */
.icon-crypto { background-color: #fffbeb; }
.icon-crypto i { color: #f59e0b; }
.btn-crypto { background-color: #f59e0b; }
.btn-crypto:hover { background-color: #d97706; }

/* 90. Advisor (Biru Kobalt) */
.icon-advisor { background-color: #eef2ff; }
.icon-advisor i { color: #4338ca; }
.btn-advisor { background-color: #4338ca; }
.btn-advisor:hover { background-color: #3730a3; }

/* 91. Financial Analyst (Hijau Cerah) */
.icon-f-analyst { background-color: #f0fdf4; }
.icon-f-analyst i { color: #22c55e; }
.btn-f-analyst { background-color: #22c55e; }
.btn-f-analyst:hover { background-color: #16a34a; }

/* 92. Banker (Biru Tua) */
.icon-banker { background-color: #eef2ff; }
.icon-banker i { color: #3b30c9; }
.btn-banker { background-color: #3b30c9; }
.btn-banker:hover { background-color: #3a30a8; }

/* 93. Investment Manager (Biru Kehijauan/Teal) */
.icon-inv-manager { background-color: #f0fdfa; }
.icon-inv-manager i { color: #14b8a6; }
.btn-inv-manager { background-color: #14b8a6; }
.btn-inv-manager:hover { background-color: #0d9488; }

/* 94. Portfolio Manager (Merah Marun) */
.icon-port-manager { background-color: #fef2f2; }
.icon-port-manager i { color: #b91c1c; }
.btn-port-manager { background-color: #b91c1c; }
.btn-port-manager:hover { background-color: #991b1b; }

/* 95. Actuary (Abu-abu) */
.icon-actuary { background-color: #f8f9fa; }
.icon-actuary i { color: #6c757d; }
.btn-actuary { background-color: #6c757d; }
.btn-actuary:hover { background-color: #5a6268; }

/* 96. Credit Analyst (Merah Muda) */
.icon-credit-analyst { background-color: #fdeeee; }
.icon-credit-analyst i { color: #f06a78; }
.btn-credit-analyst { background-color: #f06a78; }
.btn-credit-analyst:hover { background-color: #e84a5c; }

/* 97. Risk Manager (Merah Cerah) */
.icon-f-risk-manager { background-color: #fdeeee; }
.icon-f-risk-manager i { color: #d90429; }
.btn-f-risk-manager { background-color: #d90429; }
.btn-f-risk-manager:hover { background-color: #c82333; }

/* 98. Securities Trader (Biru Langit) */
.icon-securities { background-color: #e0f2fe; }
.icon-securities i { color: #0ea5e9; }
.btn-securities { background-color: #0ea5e9; }
.btn-securities:hover { background-color: #0c87bf; }

/* 99. Stock Trading (Hijau) */
.icon-stock { background-color: #edfcf1; }
.icon-stock i { color: #16a34a; }
.btn-stock { background-color: #16a34a; }
.btn-stock:hover { background-color: #157347; }

/* 100. Tax Consultant (Ungu/Magenta) */
.icon-tax { background-color: #fdf2f8; }
.icon-tax i { color: #d946ef; }
.btn-tax { background-color: #d946ef; }
.btn-tax:hover { background-color: #c026d3; }

/* --- SKEMA WARNA UNTUK SUB-KATEGORI COACHING JOBS --- */

/* 101. Sports (Kuning/Oranye) */
.icon-sports-coach { background-color: #fffbeb; }
.icon-sports-coach i { color: #f59e0b; }
.btn-sports-coach { background-color: #f59e0b; }
.btn-sports-coach:hover { background-color: #d97706; }

/* 102. Nutrition (Hijau Cerah) */
.icon-nutrition-coach { background-color: #f0fdf4; }
.icon-nutrition-coach i { color: #22c55e; }
.btn-nutrition-coach { background-color: #22c55e; }
.btn-nutrition-coach:hover { background-color: #16a34a; }

/* 103. Fitness (Merah Cerah) */
.icon-fitness-coach { background-color: #fdeeee; }
.icon-fitness-coach i { color: #d90429; }
.btn-fitness-coach { background-color: #d90429; }
.btn-fitness-coach:hover { background-color: #c82333; }

/* 104. Life (Biru Langit) */
.icon-life-coach { background-color: #e0f2fe; }
.icon-life-coach i { color: #0ea5e9; }
.btn-life-coach { background-color: #0ea5e9; }
.btn-life-coach:hover { background-color: #0c87bf; }

/* 105. Health (Merah Muda) */
.icon-health-coach { background-color: #fdeeee; }
.icon-health-coach i { color: #f06a78; }
.btn-health-coach { background-color: #f06a78; }
.btn-health-coach:hover { background-color: #e84a5c; }

/* 106. Wellness (Biru Kehijauan/Teal) */
.icon-wellness-coach { background-color: #f0fdfa; }
.icon-wellness-coach i { color: #14b8a6; }
.btn-wellness-coach { background-color: #14b8a6; }
.btn-wellness-coach:hover { background-color: #0d9488; }

/* 107. Sales (Kuning/Oranye - Ulang) */
.icon-sales-coach { background-color: #fffbeb; }
.icon-sales-coach i { color: #f59e0b; }
.btn-sales-coach { background-color: #f59e0b; }
.btn-sales-coach:hover { background-color: #d97706; }

/* 108. Trainer (Merah Cerah - Ulang) */
.icon-trainer { background-color: #fdeeee; }
.icon-trainer i { color: #d90429; }
.btn-trainer { background-color: #d90429; }
.btn-trainer:hover { background-color: #c82333; }

/* 109. Financial (Hijau Cerah - Ulang) */
.icon-financial-coach { background-color: #f0fdf4; }
.icon-financial-coach i { color: #22c55e; }
.btn-financial-coach { background-color: #22c55e; }
.btn-financial-coach:hover { background-color: #16a34a; }

/* 110. Relationship (Merah Muda - Ulang) */
.icon-relationship-coach { background-color: #fdeeee; }
.icon-relationship-coach i { color: #f06a78; }
.btn-relationship-coach { background-color: #f06a78; }
.btn-relationship-coach:hover { background-color: #e84a5c; }

/* 111. Leadership (Biru Kobalt) */
.icon-leadership-coach { background-color: #eef2ff; }
.icon-leadership-coach i { color: #4338ca; }
.btn-leadership-coach { background-color: #4338ca; }
.btn-leadership-coach:hover { background-color: #3730a3; }

/* 112. Yoga (Ungu/Magenta) */
.icon-yoga { background-color: #fdf2f8; }
.icon-yoga i { color: #d946ef; }
.btn-yoga { background-color: #d946ef; }
.btn-yoga:hover { background-color: #c026d3; }

/* 113. Career (Biru Kehijauan/Teal - Ulang) */
.icon-career-coach { background-color: #f0fdfa; }
.icon-career-coach i { color: #14b8a6; }
.btn-career-coach { background-color: #14b8a6; }
.btn-career-coach:hover { background-color: #0d9488; }

/* 114. Executive (Abu-abu) */
.icon-executive-coach { background-color: #f8f9fa; }
.icon-executive-coach i { color: #6c757d; }
.btn-executive-coach { background-color: #6c757d; }
.btn-executive-coach:hover { background-color: #5a6268; }

/* 115. Business (Hijau Cerah - Ulang) */
.icon-business-coach { background-color: #f0fdf4; }
.icon-business-coach i { color: #22c55e; }
.btn-business-coach { background-color: #22c55e; }
.btn-business-coach:hover { background-color: #16a34a; }

/* 116. Academic (Biru Tua) */
.icon-academic-coach { background-color: #eef2ff; }
.icon-academic-coach i { color: #3b30c9; }
.btn-academic-coach { background-color: #3b30c9; }
.btn-academic-coach:hover { background-color: #3a30a8; }

/* --- CSS UNTUK HALAMAN DAFTAR KANDIDAT --- */

/* Untuk avatar dengan gambar */
.candidate-avatar {
    width: 80px;
    height: 80px;
    border-radius: 50%; /* Membuat gambar jadi bulat */
    object-fit: cover; /* Memastikan gambar terpotong rapi */
    border: 2px solid #eee;
}

/* Untuk avatar placeholder (No Image) */
.placeholder-avatar {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background-color: #f8f9fa;
    border: 2px solid #eee;
    display: flex;
    align-items: center;
    justify-content: center;
}

</style></head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">FreelanceHub</a>
    <div class="collapse navbar-collapse">
<ul class="navbar-nav ms-auto">

    {{-- 1. Link Jobs --}}
    <li class="nav-item">
        <a href="{{ route('jobs.index') }}" class="nav-link">Jobs</a>
    </li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Candidates
    </a>
    <ul class="dropdown-menu">
<li><a class="dropdown-item" href="{{ route('candidates.index') }}">Candidate Listing</a></li>
<li><a class="dropdown-item" href="{{ route('apply') }}">Apply</a></li>
    </ul>
</li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Employers
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('packages.index') }}">Packages</a></li>
            <li><a class="dropdown-item" href="{{ route('jobs.create') }}">Post Job</a></li>
        </ul>
    </li>

    <li class="nav-item">
        <a href="{{ route('profile') }}" class="nav-link">Profile</a>
    </li>

</ul>
  </div>
  </div>
</nav>

<div class="container">
  @yield('content')
</div>

<footer class="text-center py-3 mt-5 bg-dark text-white">
  <p class="mb-0">© 2025 FreelanceHub — Mockup UTS</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</body>
</html>

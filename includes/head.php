    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/assets/logo-removebg-preview.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        mustard: '#fc880d',
                        'mustard-dark': '#e27a0c',
                        dark: '#222222',
                        muted: '#555555',
                        light: '#FCFAF8',
                        accent: '#F4ECCF',
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                        serif: ['Lora', 'serif'],
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        .hide-scroll-bar::-webkit-scrollbar { display: none; }
        .hide-scroll-bar { -ms-overflow-style: none; scrollbar-width: none; }
        .ec-nav-main { background: #fff; border-bottom: 1px solid #eee; position: sticky; top: 0; z-index: 100; transition: box-shadow 0.3s; }
        .ec-nav-main.scrolled { box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08); }
        .ec-nav-inner { max-width: 1400px; margin: 0 auto; display: flex; align-items: center; justify-content: space-between; padding: 0 24px; height: 70px; gap: 20px; }
        .ec-logo img { height: 60px; width: auto; object-fit: contain; transition: transform 0.3s; }
        .ec-logo:hover img { transform: scale(1.05); }
        .ec-nav-right { display: flex; align-items: center; gap: 12px; }
        .ec-book-btn { background: #fc880d; color: #fff; border: none; padding: 10px 24px; border-radius: 100px; font-weight: 600; font-size: 14px; cursor: pointer; white-space: nowrap; transition: background 0.2s, transform 0.2s; box-shadow: 0 4px 16px rgba(252, 136, 13, 0.25); text-decoration: none; }
        .ec-book-btn:hover { background: #e27a0c; transform: translateY(-1px); }
        .ec-wa-btn { background: #25D366; color: #fff; border: none; padding: 10px 20px; border-radius: 100px; font-weight: 600; font-size: 14px; cursor: pointer; white-space: nowrap; transition: background 0.2s, transform 0.2s; box-shadow: 0 4px 16px rgba(37, 211, 102, 0.25); text-decoration: none; display: inline-flex; align-items: center; gap: 6px; }
        .ec-wa-btn:hover { background: #20bd5a; transform: translateY(-1px); }
        .ec-hamburger { display: none; background: none; border: none; color: #222; cursor: pointer; padding: 4px; }
        @media (max-width: 768px) {
            .ec-hamburger { display: flex; }
            .ec-book-btn-desktop { display: none !important; }
            .ec-nav-inner { height: 56px; padding: 0 16px; gap: 12px; }
            .ec-logo img { height: 44px; }
        }
        .ec-mobile-menu { position: fixed; inset: 0; background: rgba(0, 0, 0, 0.5); z-index: 200; opacity: 0; pointer-events: none; transition: opacity 0.3s; }
        .ec-mobile-menu.open { opacity: 1; pointer-events: auto; }
        .ec-mobile-panel { position: absolute; top: 0; right: 0; width: 300px; max-width: 85vw; height: 100%; background: #fff; transform: translateX(100%); transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1); display: flex; flex-direction: column; box-shadow: -8px 0 30px rgba(0, 0, 0, 0.1); }
        .ec-mobile-menu.open .ec-mobile-panel { transform: translateX(0); }
        .ec-mobile-header { display: flex; align-items: center; justify-content: space-between; padding: 16px 20px; border-bottom: 1px solid #eee; }
        .ec-mobile-links { flex: 1; padding: 16px 20px; display: flex; flex-direction: column; gap: 4px; overflow-y: auto; }
        .ec-mobile-link { display: flex; align-items: center; gap: 12px; padding: 14px 16px; color: #222; font-weight: 500; font-size: 15px; border-radius: 12px; text-decoration: none; transition: background 0.2s; }
        .ec-mobile-link:hover { background: #FFF3E0; }
        .ec-mobile-link i { color: #fc880d; }
        .ec-mobile-cta { padding: 16px 20px; border-top: 1px solid #eee; }
        .ec-cat-bar { background: #222; overflow: hidden; }
        .ec-cat-inner { max-width: 1400px; margin: 0 auto; display: flex; align-items: center; gap: 0; padding: 0 24px; overflow-x: auto; scrollbar-width: none; }
        .ec-cat-inner::-webkit-scrollbar { display: none; }
        .ec-cat-link { color: #ddd; font-size: 13px; font-weight: 500; padding: 12px 20px; white-space: nowrap; transition: color 0.2s, background 0.2s; position: relative; text-decoration: none; letter-spacing: 0.02em; }
        .ec-cat-link:hover, .ec-cat-link.active { color: #fc880d; background: rgba(252, 136, 13, 0.08); }
        .ec-cat-link::after { content: ''; position: absolute; bottom: 0; left: 20px; right: 20px; height: 2px; background: #fc880d; transform: scaleX(0); transition: transform 0.3s; }
        .ec-cat-link:hover::after, .ec-cat-link.active::after { transform: scaleX(1); }
        .ec-cat-all { display: flex; align-items: center; gap: 8px; color: #fff; font-weight: 600; font-size: 13px; padding: 12px 20px; background: #fc880d; cursor: pointer; white-space: nowrap; transition: background 0.2s; text-decoration: none; }
        .ec-cat-all:hover { background: #e27a0c; }
        @media (max-width: 768px) { .ec-cat-bar { display: none; } }
    </style>

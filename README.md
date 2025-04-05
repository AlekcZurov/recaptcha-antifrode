# Google reCAPTCHA v3 + GTM + Analytics Integration

[![License](https://img.shields.io/github/license/username/repo)](LICENSE)
![reCAPTCHA](https://img.shields.io/badge/reCAPTCHA-v3-blue)
![GTM](https://img.shields.io/badge/GTM-ready-green)
![Analytics](https://img.shields.io/badge/Yandex%20%26%20GA4-supported-orange)

Minimal working example of integrating **Google reCAPTCHA v3** with **Google Tag Manager** for bot score verification and tracking in **Yandex Metrica** and **Google Analytics (GA4)**.

---

## 🔄 Two Analytics Configurations

This repository provides two ready-to-import GTM container JSON files:

| File | Description |
|------|-------------|
| `GTM-reCAPTCHA-Yandex.json` | Sends `reCAPTCHA_score` to **Yandex Metrica**, including visit parameter and goal `botscore1`–`botscore10`. |
| `GTM-reCAPTCHA-Google.json` | Sends an **event** to **Google Analytics 4**, where:<br> • `event_name` = `{{recaptchaAction}}`<br> • Event param: `botScore` = `{{recaptchaScore}}`<br> Just replace your **GA4 measurement ID** inside the tag. |

---

## 🚀 Quick Start (EN)

1. Register at [Google reCAPTCHA admin](https://www.google.com/recaptcha/admin/), get site key and secret key.
2. Edit `bot_chek.php` and insert your secret key.
3. Upload the PHP file to your website.
4. Import either `GTM-reCAPTCHA-Yandex.json` or `GTM-reCAPTCHA-Google.json` into your GTM container.
5. Set required GTM constants:
   - `{{recaptchaSiteKey}}` → your site key
   - `{{recaptchaServerPuth}}` → your PHP filename (e.g., `verify.php`)
   - `{{YM-number}}` → your Metrica counter (Yandex only)
   - `GA4 Measurement ID` → inside the Google Analytics tag
6. In the tag **DLpush iNeedScore**, replace `target_event` with the name of your event (e.g., `click_email`). Also, configure a trigger that fires on this action.

---

## 🧪 GTM Debug & Tags Overview

**Example of reCAPTCHA response in GTM Debugger:**

![recaptcha result](https://zurov.ru/wp-content/uploads/2025/04/recaptchaSuccess.png)

**Imported tags & variables in GTM:**

![GTM json](https://zurov.ru/wp-content/uploads/2025/04/GTM_json_imrort_antibots.png)

---

## 🚀 Быстрый старт (RU)

1. Зарегистрируйтесь на [Google reCAPTCHA admin](https://www.google.com/recaptcha/admin/), получите ключи.
2. В `bot_chek.php` замените `your-secret-key` на свой секретный ключ.
3. Загрузите PHP-файл в корень сайта.
4. Импортируйте один из файлов:
   - `GTM-reCAPTCHA-Yandex.json` — для Яндекс Метрики
   - `GTM-reCAPTCHA-Google.json` — для Google Analytics 4
5. Настройте переменные:
   - `{{recaptchaSiteKey}}` → ваш site key
   - `{{recaptchaServerPuth}}` → путь к PHP
   - `{{YM-number}}` → ID счётчика (только для Yandex)
   - Идентификатор потока данных → внутри тега GA4 (только для Google)
6. В теге **DLpush iNeedScore** замените `target_event` на нужное вам событие (например, `click_email`) и замените триггер для тега на соответствующий.

---

## 📘 Полная инструкция

Полный гайд с пояснениями и примерами:  
👉 https://zurov.ru/analytics/recaptcha-antifrod/

---

## 📄 License

MIT — free to use and modify.
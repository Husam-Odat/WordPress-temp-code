# WordPress-temp-code

# WordPress Blog Project

This is a custom WordPress blog project set up locally (e.g., on `http://localhost/wp/proj01`) using PHP and MySQL. It includes custom templates and theme files to display blog posts and post details.

## 🛠️ Features

- Custom homepage and post list
- Single post view (detailed page)
- Category display
- Responsive design (optional based on your theme)
- Easy-to-use admin dashboard (WordPress built-in)

## 🗂️ Project Structure

wp/ ├── proj01/ 
    │ ├── wp-admin/ # WordPress admin backend 
    │ ├── wp-content/
    │ │ ├── themes/ 
    │ │ │ └── your-theme-name/ 
    │ │ │ ├── style.css 
    │ │ │ ├── index.php 
    │ │ │ ├── single.php # Single post template 
    │ │ │ ├── page-posts.php # Custom page template for listing posts 
    │ │ │ └── functions.php 
    │ │ └── plugins/ 
    │ └── wp-includes/


## 🚀 Installation Instructions

1. **Clone or Copy Project Files** to your local web server directory (e.g., `htdocs` in XAMPP or `www` in WAMP).
2. **Create a Database** via phpMyAdmin (e.g., `wordpress_blog`).
3. **Visit the Project URL**:  
   `http://localhost/wp/proj01/`  
   and follow the WordPress installation steps.
4. **Add or Import Theme**:  
   - Place your custom theme folder inside `wp-content/themes/`.
   - Activate it from the WordPress dashboard under **Appearance > Themes**.
5. **Create Pages**:
   - For post list: create a page and assign the `Posts Page` template (`page-posts.php`).
6. **Set Permalinks**:
   - Go to **Settings > Permalinks**.
   - Choose `Post name` for clean URLs.
   - Save changes.

## 📝 Creating Posts

1. Go to **Dashboard > Posts > Add New**.
2. Add title, content, categories, and a featured image.
3. Click **Publish**.
4. The post will appear on the post list and has its own detail page like:  
   `http://localhost/wp/proj01/index.php/2025/01/21/post-name/`

## 📁 Templates Used

- `single.php`: Template for single post detail.
- `page-posts.php`: Custom template for listing all posts.
- `index.php`: Main blog index page (fallback).
- `style.css`: Theme styling.
- `functions.php`: Add custom functionality (e.g., post thumbnails support).

## 🔧 Optional Enhancements

- Add pagination to post list.
- Enable comments on single post pages.
- Use plugins like **Classic Editor**, **Yoast SEO**, or **Jetpack**.
- Style your theme using CSS frameworks like Bootstrap or Tailwind.

## 📜 License

Open-source for educational and personal use.

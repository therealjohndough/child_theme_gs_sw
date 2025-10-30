<?php
/**
 * Theme Diagnostic Tool
 * Upload this as debug-theme.php to your site root and visit it
 */

// Get all installed themes
$themes = wp_get_themes();

echo "<h1>WordPress Theme Diagnostic</h1>";

echo "<h2>Installed Themes:</h2>";
foreach ($themes as $theme) {
    echo "<p><strong>" . $theme->get('Name') . "</strong><br>";
    echo "Folder: " . $theme->get_stylesheet() . "<br>";
    echo "Template: " . $theme->get_template() . "<br>";
    echo "Version: " . $theme->get('Version') . "</p>";
}

echo "<h2>Current Active Theme:</h2>";
$current_theme = wp_get_theme();
echo "<p><strong>" . $current_theme->get('Name') . "</strong><br>";
echo "Folder: " . $current_theme->get_stylesheet() . "<br>";
echo "Template: " . $current_theme->get_template() . "</p>";

echo "<h2>WordPress Info:</h2>";
echo "<p>WordPress Version: " . get_bloginfo('version') . "</p>";
echo "<p>Site URL: " . get_bloginfo('url') . "</p>";

?>
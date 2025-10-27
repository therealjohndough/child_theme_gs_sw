# Sky World Cannabis - Greenshift Child Theme# Skyworld Cannabis Child Theme



A custom child theme for the Sky World Cannabis website rebuild project, built on the Greenshift WordPress theme framework.## Installation Instructions



## Project Overview1. **Upload to WordPress:**

   - Zip this entire folder

This child theme is part of the complete website rebuild for [skyworldcannabis.com](https://skyworldcannabis.com), providing custom functionality and styling while maintaining the flexibility and performance of the Greenshift parent theme.   - Upload to `/wp-content/themes/greenshift-child/`

   - Or upload via WordPress Admin → Appearance → Themes → Add New → Upload Theme

## Features

2. **Activate Theme:**

### COA (Certificate of Analysis) System   - Go to WordPress Admin → Appearance → Themes

- **COA Labs Template**: Custom page template (`template_sw_labs.php`) for displaying lab results   - Activate "Greenshift Child - Skyworld"

- **PDF New Tab Handler**: JavaScript functionality to open COA PDFs in new tabs instead of embedding

- **Interactive Product Display**: 34 products total with real lab data and batch numbers3. **Create COA Labs Page:**

- **Conditional Asset Loading**: COA-specific styles and scripts only load on relevant pages   - Create a new page in WordPress Admin

   - Set page title (e.g., "Lab Results" or "COA")

### Product Catalog   - In Page Attributes, select "Labs COA Page" template

- **17 Flower Products**: 3.5g jars with accurate THC percentages   - Publish the page

- **15 Pre-roll Products**: Various sizes with lab-verified data

- **2 Hash Hole Products**: 1g specialty items## Theme Structure

- **Real COA Integration**: Direct links to Certificate of Analysis PDFs

```

### Custom Enhancementsgreenshift-child/

- Parent theme style inheritance├── style.css                 # Child theme styles with COA labs styling

- Optimized asset loading├── functions.php             # Theme functions and asset loading

- Mobile responsive design├── template_sw_labs.php     # COA labs page template

- Accessibility compliant interface└── assets/

    └── coas/                # 31 COA PDF files

## File Structure        ├── COA-SW3725J-LO.pdf

        ├── COA-SW3725J-WZ.pdf

```        └── ... (29 more PDFs)

greenshift-child-production/```

├── functions.php              # Theme functions and enqueues

├── style.css                  # Child theme styles with COA styling## Features

├── template_sw_labs.php       # COA Labs page template

├── assets/- **34 Products Total:**

│   ├── js/  - 17 Flower products (3.5g jars)

│   │   └── coa-open-newtab.js # COA PDF new tab handler  - 15 Pre-roll products (various sizes)

│   └── coas/                  # 31+ COA PDF files  - 2 Hash Hole products (1g)

│       ├── COA-SW3725J-LO.pdf

│       ├── COA-SW3725J-WZ.pdf- **Interactive COA Viewer:**

│       └── ... (additional PDFs)  - Click any batch number to view PDF in lightbox

├── README.md                  # This file  - Mobile responsive design

└── screenshot.png             # Theme screenshot  - Accessibility compliant

```

- **Accurate Lab Data:**

## Installation  - All THC percentages match lab results

  - Real batch numbers and COA links

1. **Upload to WordPress:**  - Professional presentation

   - Zip this entire folder

   - Upload to `/wp-content/themes/greenshift-child-production/`## Missing COA PDFs

   - Or upload via WordPress Admin → Appearance → Themes → Add New → Upload Theme

The following products are in the template but missing PDFs:

2. **Activate Theme:**- Charmz (SW3725J-CMZ) - PDF link is blank

   - Go to WordPress Admin → Appearance → Themes- Sherb Cream Pie Hash Hole (SW051925-HH-SCPXPR) - PDF missing

   - Activate "Greenshift Child - Sky World"

Add these PDFs to `/assets/coas/` when available.

3. **Create COA Labs Page:**

   - Create a new page in WordPress Admin## Support

   - Set page title (e.g., "Lab Results" or "COA")

   - In Page Attributes, select "Labs COA Page" templateFor questions or updates, contact the development team.

   - Publish the page

## Development

### Requirements
- WordPress 5.0+
- Greenshift parent theme
- PHP 7.4+
- jQuery (automatically loaded)

### Key Functions

#### Style & Script Enqueuing
- `greenshift_child_enqueue_styles()` - Handles parent/child theme CSS loading
- `greenshift_child_coa_labs_assets()` - Conditional loading for COA-specific assets
- `greenshift_enqueue_coa_open_newtab()` - Enqueues COA PDF new tab handler

#### JavaScript Features
- COA PDF links open in new tabs instead of lightbox embedding
- Prevents default click behavior and stops event propagation
- Error handling for missing PDFs with user-friendly alerts

## Known Issues & Missing Assets

The following products are in the template but may need PDF updates:
- Charmz (SW3725J-CMZ) - Verify PDF availability
- Sherb Cream Pie Hash Hole (SW051925-HH-SCPXPR) - Check PDF status

Add missing PDFs to `/assets/coas/` directory when available.

## Browser Support

- Modern browsers (Chrome, Firefox, Safari, Edge)
- Mobile responsive design
- Progressive enhancement approach
- Accessibility features included

## Customization

The theme follows WordPress child theme best practices:
- All customizations are contained within the child theme
- Parent theme updates won't override custom functionality
- Modular asset loading for optimal performance
- Clean, maintainable code structure

## Contributing

This is a client-specific project for Sky World Cannabis. For modifications or updates:
1. Follow established development workflow
2. Test thoroughly on staging environment
3. Ensure mobile responsiveness
4. Maintain accessibility standards

## License

Private project - All rights reserved Sky World Cannabis

## Support

For questions, updates, or technical support, contact the development team.
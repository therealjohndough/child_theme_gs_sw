# Skyworld Cannabis Child Theme

## Installation Instructions

1. **Upload to WordPress:**
   - Zip this entire folder
   - Upload to `/wp-content/themes/greenshift-child/`
   - Or upload via WordPress Admin → Appearance → Themes → Add New → Upload Theme

2. **Activate Theme:**
   - Go to WordPress Admin → Appearance → Themes
   - Activate "Greenshift Child - Skyworld"

3. **Create COA Labs Page:**
   - Create a new page in WordPress Admin
   - Set page title (e.g., "Lab Results" or "COA")
   - In Page Attributes, select "Labs COA Page" template
   - Publish the page

## Theme Structure

```
greenshift-child/
├── style.css                 # Child theme styles with COA labs styling
├── functions.php             # Theme functions and asset loading
├── template_sw_labs.php     # COA labs page template
└── assets/
    └── coas/                # 31 COA PDF files
        ├── COA-SW3725J-LO.pdf
        ├── COA-SW3725J-WZ.pdf
        └── ... (29 more PDFs)
```

## Features

- **34 Products Total:**
  - 17 Flower products (3.5g jars)
  - 15 Pre-roll products (various sizes)
  - 2 Hash Hole products (1g)

- **Interactive COA Viewer:**
  - Click any batch number to view PDF in lightbox
  - Mobile responsive design
  - Accessibility compliant

- **Accurate Lab Data:**
  - All THC percentages match lab results
  - Real batch numbers and COA links
  - Professional presentation

## Missing COA PDFs

The following products are in the template but missing PDFs:
- Charmz (SW3725J-CMZ) - PDF link is blank
- Sherb Cream Pie Hash Hole (SW051925-HH-SCPXPR) - PDF missing

Add these PDFs to `/assets/coas/` when available.

## Support

For questions or updates, contact the development team.

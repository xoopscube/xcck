[![Project Status: Active – The project has reached a stable, usable state and is being actively developed.](https://www.repostatus.org/badges/2.0.0/active.svg)](https://github.com/xoopscube/)
![License GPL](https://img.shields.io/badge/License-GPL-green)
![X-Updare Store](https://img.shields.io/badge/X--Update%20Store-Pending-red)

## ///// — xCCK - XCube Contents Creation Kit

![creation kit](https://repository-images.githubusercontent.com/336454879/2c23f071-9e02-495e-a508-fbb62f9ac0c7)


MODULE | xCCK
------------ | -------------
Description | xCCK is a simple yet powerful and versatile no-code database module.
Render Engine | Smarty v2 and XCube Layout
Version | 2.50.0
Update | @gigmaster Nuno Luciano (XCL7)
Author | Original by @kilica (core developer)
Copyright | 2011-2025 Authors
License | GPL


##### :computer: The Minimum Requirements



          Apache, Nginx, etc. PHP 8.2.x
          MySQL 8.x, MariaDB  InnoDB utf8 / utf8mb4
          XCL version 2.5.+



-----



## Overview

### xCCK : XCube Contents Creation Kit


xCCK, an acronym for XOOPSCube Contents Creation Kit, is a simple yet powerful and versatile no-code database module. 
A Contents Creation Kit (CCK) empowers users to create and manage various content types without requiring programming expertise.
xCCK enables the flexible creation of web applications for storing and displaying data,
suitable for content, news, product catalogs, image albums, blogs, link lists, and more.

**Module Requirements**

- XCube Web Application Platform   
- Distribution XCL2.5.+ recommended   
- Lecat module (for category management)
- Leprogress module (for progress management)
- PHP  8.2 and MySQL 8.x

**Author**
@kilica (core developer)
@gigamaster maintainer

**Installation**
- Download the latest release from the GitHub repository.
- Extract the downloaded archive to the root directory of your installation.
- Access the administration panel and navigate to the "Modules" section.
- Click on the "Install" button next to the xCCK module.
- Follow the on-screen instructions to complete the installation process.

**Usage**
- After installation, the xCCK module will be available in the XCube administration panel.
- To create a new content type, click on the "Add a new page" button.
- Define the fields and properties of the content type, such as field name, field type, and validation rules.
- Save the content type to apply the changes.
- View the created content items in the xCCK module or by using the appropriate module tags.

**Customization**
- The xCCK module provides various customization options to tailor the content to your needs.
- You can modify the field types, validation rules, and templates to suit your requirements.
- Refer to the module documentation for detailed instructions on customization.

**Contribution**
- Contributions to the xCCK module are welcome!
- If you find any bugs or have suggestions for improvements, please open an issue on the GitHub repository.


**Features**   
Webbmasters can easily create new fields and pages to manage data. 
Select the field type from :

- string (one line of text), 
- text (multi-line of text), 
- int (integer), 
- date (select date), 
- category (category), 
- select (choice), 
- checkbox (checkbox)

**Parent Page-Child** 

**Page Settings**   
You can create child pages for a page like a tree structure.

**Set subpages for pages**   
By linking multiple xCCKs, you can set subpages for the main page. 
For example, you can use the sub-page function to manage what size options are available for a product.

**Category or group-based granular permission settings**      
By using a common module that complies with Legacy_Category and Legacy_Group, 
you can set detailed permissions for viewing, editing, and management.

**Classification by tag**   
By using a common module that conforms to Legacy_Tag, pages can be classified by tags.

**Image attachment**   
Images can be attached to pages by using a common module that conforms to Legacy_Image.

**Workflow**   
You can apply the approval function for publishing a page by using a module that conforms to Legacy_Workflow.

**License**
- GPL

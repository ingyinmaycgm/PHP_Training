# Tutorial 08

## CRUD with post table

## Table

posts
- id (unsigned int, auto increment, primary key)
- title (varchar, length:255)
- content (text, nullable)
- is_published (boolean)
- created_datetime (timestamp, default value: current timestamp)
- updated_datetime (timestamp, default value: current timestamp)

CURD
- C  (Create)
- R  (List)
- D  (Delete (confirm))

## Folder Structure
```
.
css/
├── reset.css
└── style.css
demo/
└── Tuto_08.png
images/
├── example_01.png
├── example_02.png
└── ...
libs/
index.php
README.md
```

## Validation Rules
- Title field is required, max_length - 255
- Content field is required, max_length - 10000

<hr>

## Post Create Design
![post_create.png](demo/post_create.png)

## Post Delete Confirm Alert Design
![post_delete_confirm_alert.png](demo/post_delete_confirm_alert.png)

## Posts List Design

![post_list.png](demo/post_list.png)

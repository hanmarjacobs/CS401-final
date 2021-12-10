# Final website for CS401

Name: Hannah Jacobson
email: hannahjacobson@u.boisestate.edu

## How to run this website

Welcome to the Secret Wizard Blog!

From the folder containing the source files, run the following command
to enable php, if you haven't already:

php -S localhost:3000

Then open localhost:3000 in your web browser!

## Bugs

There is an extra <div> container printed at the end of the posts.
This is because the file containing all posts has an empty line at its
end, due to the method of appending each new post. It does not interfere
with the numbering of posts in the edit dropdowns, but it does create
an empty rectangle at the bottom of the home page.

Also, if someone uses a '`' in their post, the post will
be cut off prematurely. If it is present in their post name, then
the second half of the title - after the '`' - will be read as
the content of their post, and the body of whatever text they
wrote will be skipped over.

## Features

From the home page, you can read all blog posts and access the pages
to write a new one or edit an existing post.

To write a new post, simply enter a post title and content and hit 
the submit button.

To edit a new post, you must select which post is being edited from
a dropdown menu. Posts are numbered according to chronological order.
I recognize that this is inefficient and hostile to users. I will
not be changing it. Then, enter a new post title and content. Once 
you hit submit, the original post will be overwritten.

The edit page also contains a mechanism to delete posts. Select the post
number in the same fashion as if you were editing it, and hit submit!
The post will be erased from history.

## References

The following links are code and code discussions that were referenced
for this project.

https://stackoverflow.com/questions/35443812/how-to-save-string-entered-in-html-form-to-text-file
https://stackoverflow.com/questions/235604/overwrite-line-in-file-with-php

Wizard art painted by Myles Pinkney.
https://www.mylespinkney.com/planetarius.htm

The starry background is liscensed under Creative Commons.


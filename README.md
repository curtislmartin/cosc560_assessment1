# COSC560 Assessment 1

Github repo link: [https://github.com/curtislmartin/cosc560_assessment1](https://github.com/curtislmartin/cosc560_assessment1)

## Difficulties

- Following the instructions but not knowing exactly where to start, or how far to flesh out something that is stubbed. This includes referencing things that don't exist yet, or whether I am referencing something correctly.
- I created the factory and seeder for Post, ran the seeder and thought it worked. Turned out it didn't work, I was supposed to add the PostSeeder call via a $this->call to the DatabaseSeeder. I only discovered this when I was trying to dynamically display the list of generated posts in the "/all" route table, but it stayed empty!
- I wasn't sure what was meant by create the model and migration and write up the table. I wasn't sure if the fields in the migrations table needed to also be written in the model file.
- I didn't really understand how syntax and how communication between Controller and View occurred, such as the differences in assigning in the controller ( = assignment in functions, => in return arrays) and I am used to accessing variables from objects using the dot method (posts.id) instead of this arrow method (posts->id).

## Approach

I started off reviewing the assignment requirements and mapping each part to the tutorials. Where things weren't clear I went through the lectures, which helped but still left gaps. Following that I used the Laravel docs and also realised that the pregenerated code like the User stuff was a good reference.

I stubbed routes, did the migration, created the factory and seeder. Then I created the controllers and stubbed the functions. I went back to the routes and linked them to the controller class methods. I then created the blade views. I then worked one by one implementing each function and its related view, first list, then edit, then create, then save, then delete.

I improved the UI for the forms when the functionality was implemented.

I probably could have done this better. I chopped and changed, ended up working on each functionality (list, edit, create, etc.) and stepped through each of the MVC components for each which was confusing. I would have been better off working on each area (M/V/C) in isolation, such as getting the controller functionality completed.

I also tried to do commits at each stage but ended up doing the final stages in one final commit.

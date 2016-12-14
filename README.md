#The User Stories#

We will have three type of users: Admin (owns and administers the website), Visitor (visits the website looking for a job), User (visits the website to post jobs).

##Story1: On the homepage, the Visitor sees the latest active jobs##

On the JobZ homepage a Visitor sees a list of 10 recent active jobs grouped by category. Only the location, the position, and the company are displayed for each job.
For each category there are links that allow to list all the jobs. The Visitor can also search for jobs or post a new job.

##Story2: A Visitor can ask for all the jobs in a given category##

The Visitor sees a list of all the jobs from the category sorted by date.

##Story3: A Visitor refines the list with some keywords##

The Visitor can enter some keywords to refine his search. Keywords can be words found in the location, the position, the category, or the company fields.

##Story4: A Visitor clicks on a job to see more detailed information##

The Visitor can select a job from the list to see more detailed information.

##Story5: A Visitor can register to post a job##

A Visitor can register with his email and a username and a password to became a User to post jobs

##Story6: A User posts a job##

A User can post a job. A job is made of several pieces of information:

*Company
*Type (full-time, part-time, or freelance)
*URL (optional)
*Position
*Location
*Category (the user chooses in a list of possible categories)
*Job description (URLs and emails are automatically linked)
*How to apply (URLs and emails are automatically linked)
*Email (email of the poster)

The process has only one steps: first, the User fills in the form with all the needed information to describe the job.

There is a must to create an account to post a job.

##Story7: An Admin configures the website##

An Admin can edit the categories available on the website.

##Story8: An Admin manages the jobs##

An Admin can edit and remove any posted job.

##Story9: An Admin manages informations##
An admin can edit, add and remove informations.

An information has:
*Title
*Description

##Story10: An Admin manages menus##
An admin can group informations to make menus as you can see on the footer and the header of the website.

Covering your code with tests (unit and functional) is not a must but very welcomed.
Please pay attention to do not break software design principles like SOLID, DRY, KISS etc.
For install project : 
$ composer update

After composer install,create file : cv.yml on new folder config.

the structure of cv.yml is : 

#Your information
info:
    first_name: John
    last_name: Doe
    complete_name: Mister X
    birth_date: January 01 1970
    adress: You adress
    postal_code: Your zipcode
    city: Your city
    phone_number: Your phone number
    email: Your email
    cv_title: The title of the CV
    facebook: Your facebook
    twitter: Your twitter
    google+: Your Google+
    description: >
        Your long description

#Your professional Exprience
professional_experience:
    1:
        society: Google
        website: http://www.google.fr
        date_start: 2011
        date_end: Currently
        job: CEO
        society_description: search motor
        job_description:
            1: Leader on the web
            2: Numero Uno !
            3: The Google's kitchen is amazing !
    2:
        society: Amazon
        website: http://www.amazon.com
        date_start: 2008
        date_end: 2011
        job: CEO
        society_description: The largest book retailer
        job_description:
            1: Developping buisiness
            2: Talk to syndicat
#You can add all you want job_description, the key is useless !
#You can add too all you want profressional_experience, the key is useless  !

# For schooling is same, you can add many degree if you want, just respect the archi !

schooling:
    1:
        school_name: Primary school
        school_city: New York
        degree: Learn to write
        date: 1970


#For this block, the key is important, but you can add as many skills as you want!
competences:
    Backend-dev:
        level: 80%
        description: PHP !
    Frontend:
        level: 70%
        description: Javacript / HTML / CSS
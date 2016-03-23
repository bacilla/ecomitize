ECOMITIZE PRACTICE

Here you can find implemented tasks on magento and database placed in sql.dump file

The login for admin area: demo
The password for admin: demodemo34


Practical Test #1 - Simple FAQ extension

    I created module which you can find in `app/code/local/Ecomitize/Faq`
    Also in Admin -> Catalog -> FAQs you will find the grid with all questions and answers accordingly to Test #1

    - Create a page where all questions and answers will be listed as ul-li list
	This page exists under `/faqs/index/index`
    
    - Create a block that will appear on home page and shows random questions and answers on it.
	You will see block on home page which show 4 random questions and answers.
    
    - Create A widget that will allow the store admin to be able to add a block to any CMS page or Static block that will show a custom list of Questions(i.e. an input field where they can type 1,2,3,10,37, etc).
	Widget you can find in Admin -> CMS -> Widget, widget was already added to `About Us` page at the bottom of content
    
    
    
    
Practical Test #2 - Dynamical Values
    
    Current functionality was implemented in `app/code/local/Ecomitize/Faq` module, according to task
    it was required just to add custom attribute to products, what was done successfully from install script,
    you can see it on additional tab on product view page. It also reachable through
    <?php echo $_product->getCustomAttribute(); ?> from view.phtml.
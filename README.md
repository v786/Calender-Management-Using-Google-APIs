# Calender-Management-Using-Google-APIs
update our google event data, we need to use some sort of a "Google Calendar Web hook", which will inform us of any calendar event change.

Page 1
      A big "Google Login" button, which takes you to the Google oAuth flow
 
Redirect URL in the middle
    The redirect page, which the user is sent back to by Google with the valid credentials
    
Page 2
    The final SUCCESS page, which you shall show, after storing tokens if the google login went fine.
 
Now, Page 2 URL should look something like this ,
     <some_application_url>/success/<user_email>
so that its easier for our PHP application to find out which email info are we looking for as we are not using any session/cookie based auth for now.
 
4. This success page is supposed to display all the events of the calendar from the logged-in user
 
5. Whenever I refresh, if new events were added to the calendar, they should also be shown here.
 
6. In order to update our google event data, we need to use some sort of a "Google Calendar Web hook", which will inform us of any calendar event change.
 
7. ALSO, the requirement is, we store the google events in our local DB, and fetch it from there to show on the "success" page, instead of making Google API calls to fetch events on every page refresh.
 
8. The update of our google event data should always be an a-synchronous back end job.
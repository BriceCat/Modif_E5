<div class="container incontainer py-5">
        <div class="col-xs-6">
                <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="required" for="name">Name (Your socials ID : @,#,...)</label>
                        <input id="name" class="form-control" name="name" type="text" value="" required />
                        <span id="name_validation" class="error_message"></span>
                    </div>
                    <div class="form-group">
                        <label class="required" for="email">Email</label>
                        <input id="email" class="form-control" name="email" type="email" value="" required />
                        <span id="email_validation" class="error_message"></span>
                    </div>
                    <div class="form-group">
                        <label class="required" for="message">Description</label>
                        <textarea id="message" class="form-control" name="message" rows="5" cols="30" required></textarea>
                        <span id="message_validation" class="error_message"></span>
                    </div>
                    <div>
                        <input class="increase" type="checkbox" id="agree" name="agree">
                        <label for="agree">I have read and i accept the Therms & Conditions above</label>
                    </div>
                    <div class="col-xs-5"></div>
                    <div class="col-xs-6">
                    <input id="submit_button" class="btn btn-primary" type="submit" value="Submit" />
                    <div id="after_submit"></div>
                    </div>
                </form>
            </div>
            <div class="col-xs-3"></div>
        </div>
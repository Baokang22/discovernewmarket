<?php /*Template Name: newsletter */ get_header(); ?>

<style>
    ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #b6e455!important;
}
::-moz-placeholder { /* Firefox 19+ */
  color: #b6e455!important;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #b6e455!important;
}
:-moz-placeholder { /* Firefox 18- */
  color: #b6e455!important;
}
.main-table{
        display: none;
}
.main-submit{
    display: none;
}

@media(min-width:768px){
    .main-table{
        display: table;
    }
    .main-submit{
        display: table;
    }
}
.main-table-mobile{
    display: table;
}
.mobile-submit{
    display: table;
}
@media(min-width:768px){
    .main-table-mobile{
        display: none;
    }
    .mobile-submit{
        display: none;
    }
}

    
</style>


<img class="clip-grey " src="<?php echo get_template_directory_uri(); ?>/images/slants/footer-top.png" class="img-responsive" alt="" >
<section class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form method="post" action="http://www.pages03.net/jockeyclubracecourses/DiscoverNewmarketSignupForm/Sign-up" pageId="7100372" siteId="255079" parentPageId="7100371" >
                    <table class="main-table" cellpadding="0" cellspacing="0" border="0" style="-webkit-border-horizontal-spacing: 0px;
                        -webkit-border-vertical-spacing: 0px;
                        -webkit-margin-start: auto;
                        -webkit-margin-end: auto;">
                        <!-- first row -->
                        <tr>
                            <td style="padding: 5px 0px 0px 5px; width: 60%;">
                              
                                    <table>
                                        <tr>
                                            
                                            <td height="100%" width="100%" valign="top" style="padding: 0px;">
                                                <input type="text" placeholder="first name" name="First_Name" id="control_COLUMN2" label="First Name" class="textInput defaultText" style="margin: 0 3px 5px 0px; height: 30px; width: 294px; border-top:none; border-left:none; border-right:none; border-bottom:1px solid #b7e35f; background-color: transparent;">
                                            </td>
                                        </tr>
                                    </table>
                              
                            </td>
                            <td style="padding: 5px 0px 0px 5px; width: 60%;">
                               
                                    <table>
                                        <tr>
                                            
                                            <td height="100%" width="100%" valign="top" style="padding: 0px;">
                                                <input type="text" placeholder="last name" name="Last_Name" id="control_COLUMN3" label="Last Name" class="textInput defaultText" style="margin: 0 3px 5px 0px; height: 30px; width: 294px; border-top:none; border-left:none; border-right:none; border-bottom:1px solid #b7e35f; background-color: transparent;">
                                            </td>
                                        </tr>
                                    </table>
                              
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px 0px 0px 5px; width: 60%;">
                                
                                    <table>
                                        <tr>
                                            <td height="100%" width="100%" valign="top" style="padding: 0px;">
                                                <input type="text" placeholder="email address" name="Email" id="control_EMAIL" label="Email" class="textInput defaultText" style="margin: 0 3px 5px 0px; height: 30px; width: 294px; border-top:none; border-left:none; border-right:none; border-bottom:1px solid #b7e35f; background-color: transparent;">
                                            </td>
                                        </tr>
                                    </table>
                              
                            </td>
                            <td style="padding: 5px 0px 0px 5px; width: 60%;">
                                
                                    <table>
                                        <tr>
                                            <td height="100%" width="100%" valign="top" style="padding: 0px;">
                                                <input type="text" placeholder="phone number" name="Phone" id="" label="phone Number" class="textInput defaultText" style="margin: 0 3px 5px 0px; height: 30px; width: 294px; border-top:none; border-left:none; border-right:none; border-bottom:1px solid #b7e35f; background-color: transparent;">
                                            </td>
                                        </tr>
                                    </table>
                            
                            </td>
                        </tr>
                        
                        <tr>
                            <td style="padding: 5px 0px 0px 5px; width: 60%;">
                                
                                    <table>
                                        <tr>
                                            <td height="100%" width="100%" valign="top" style="padding: 0px;">
                                                <input type="text" placeholder="country" name="country" id="" label="country" class="textInput defaultText" style="margin: 0 3px 5px 0px; height: 30px; width: 294px; border-top:none; border-left:none; border-right:none; border-bottom:1px solid #b7e35f; background-color: transparent;">
                                            </td>
                                        </tr>
                                    </table>
                              
                            </td>
                            <td style="padding: 5px 0px 0px 5px; width: 60%;">
                                
                                    <table>
                                        <tr>
                                            <td height="100%" width="100%" valign="top" style="padding: 0px;">
                                                <input type="text" placeholder="postcode" name="postcode" id="" label="postcode" class="textInput defaultText" style="margin: 0 3px 5px 0px; height: 30px; width: 294px; border-top:none; border-left:none; border-right:none; border-bottom:1px solid #b7e35f; background-color: transparent;">
                                            </td>
                                        </tr>
                                    </table>
                             
                            </td>
                        </tr>
                        <tr>
                            <td id="errorMessageContainerId" class="formErrorMessages" style="display: none;">
                                
                            </td>
                        </tr>
                        <tr>
                            <td>
                                
                            </td>
                            
                            <table style="-webkit-border-horizontal-spacing: 0px;
                        -webkit-border-vertical-spacing: 0px;
                        -webkit-margin-start: auto;
                        -webkit-margin-end: auto;">
                                <tr>
                                    
                                    
                                    <td height="100%" width="100%" valign="top" style="padding: 0px;">
                                        <table cellspacing="0" cellpadding="0" border="0" >
                                            <tr>
                                                <td style="padding-right: 10px;">
                                                    <input type="submit" class="defaultText buttonStyle main-submit" value="Submit" style="color: white; background-color: #b6e455; font-size: 1.7rem; border: none; padding-left: 2.75rem; padding-right: 2.75rem; padding-top: 1rem; padding-bottom: 1rem;">
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    
                                </tr>
                            </table>
                        </div>
                        
                    </tr>
                    <tr>
                        <td>
                            <input type="hidden" name="Racecourse_18DN_AV" id="control_COLUMN25" value="Yes">
                        </td>
                    </tr>
                    <input type="hidden" name="formSourceName" value="StandardForm"><!-- DO NOT REMOVE HIDDEN FIELD sp_exp --><input type="hidden" name="sp_exp" value="yes">
                </table>





                <!-- Mobile Table -->
                <table class="main-table-mobile" cellpadding="0" cellspacing="0" border="0" style="-webkit-border-horizontal-spacing: 0px;
                        -webkit-border-vertical-spacing: 0px;
                        -webkit-margin-start: auto;
                        -webkit-margin-end: auto;">
                        <!-- first row -->
                        <tr>
                            <td style="padding: 5px 0px 0px 5px; width: 60%;">
                              
                                    <table>
                                        <tr>
                                            
                                            <td height="100%" width="100%" valign="top" style="padding: 0px;">
                                                <input type="text" placeholder="first name" name="First_Name" id="control_COLUMN2" label="First Name" class="textInput defaultText" style="margin: 0 3px 5px 0px; height: 30px; width: 294px; border-top:none; border-left:none; border-right:none; border-bottom:1px solid #b7e35f; background-color: transparent;">
                                            </td>
                                        </tr>
                                    </table>
                              
                            </td>
                            
                        </tr>
                        <tr>
                            <td style="padding: 5px 0px 0px 5px; width: 60%;">
                               
                                    <table>
                                        <tr>
                                            
                                            <td height="100%" width="100%" valign="top" style="padding: 0px;">
                                                <input type="text" placeholder="last name" name="Last_Name" id="control_COLUMN3" label="Last Name" class="textInput defaultText" style="margin: 0 3px 5px 0px; height: 30px; width: 294px; border-top:none; border-left:none; border-right:none; border-bottom:1px solid #b7e35f; background-color: transparent;">
                                            </td>
                                        </tr>
                                    </table>
                              
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px 0px 0px 5px; width: 60%;">
                                
                                    <table>
                                        <tr>
                                            <td height="100%" width="100%" valign="top" style="padding: 0px;">
                                                <input type="text" placeholder="email address" name="Email" id="control_EMAIL" label="Email" class="textInput defaultText" style="margin: 0 3px 5px 0px; height: 30px; width: 294px; border-top:none; border-left:none; border-right:none; border-bottom:1px solid #b7e35f; background-color: transparent;">
                                            </td>
                                        </tr>
                                    </table>
                              
                            </td>
                            
                        </tr>
                        <tr>
                            <td style="padding: 5px 0px 0px 5px; width: 60%;">
                                
                                    <table>
                                        <tr>
                                            <td height="100%" width="100%" valign="top" style="padding: 0px;">
                                                <input type="text" placeholder="phone number" name="Phone" id="" label="phone Number" class="textInput defaultText" style="margin: 0 3px 5px 0px; height: 30px; width: 294px; border-top:none; border-left:none; border-right:none; border-bottom:1px solid #b7e35f; background-color: transparent;">
                                            </td>
                                        </tr>
                                    </table>
                            
                            </td>
                        </tr>
                        
                        <tr>
                            <td style="padding: 5px 0px 0px 5px; width: 60%;">
                                
                                    <table>
                                        <tr>
                                            <td height="100%" width="100%" valign="top" style="padding: 0px;">
                                                <input type="text" placeholder="country" name="country" id="" label="country" class="textInput defaultText" style="margin: 0 3px 5px 0px; height: 30px; width: 294px; border-top:none; border-left:none; border-right:none; border-bottom:1px solid #b7e35f; background-color: transparent;">
                                            </td>
                                        </tr>
                                    </table>
                              
                            </td>
                            
                        </tr>
                        <tr>
                            <td style="padding: 5px 0px 0px 5px; width: 60%;">
                                
                                    <table>
                                        <tr>
                                            <td height="100%" width="100%" valign="top" style="padding: 0px;">
                                                <input type="text" placeholder="postcode" name="postcode" id="" label="postcode" class="textInput defaultText" style="margin: 0 3px 5px 0px; height: 30px; width: 294px; border-top:none; border-left:none; border-right:none; border-bottom:1px solid #b7e35f; background-color: transparent;">
                                            </td>
                                        </tr>
                                    </table>
                             
                            </td>
                        </tr>
                        <tr>
                            <td id="errorMessageContainerId" class="formErrorMessages" style="display: none;">
                                
                            </td>
                        </tr>
                        <tr>
                            <td>
                                
                            </td>
                            
                            <table style="-webkit-border-horizontal-spacing: 0px;
                        -webkit-border-vertical-spacing: 0px;
                        -webkit-margin-start: auto;
                        -webkit-margin-end: auto;">
                                <tr>
                                    
                                    
                                    <td height="100%" width="100%" valign="top" style="padding: 0px;">
                                        <table cellspacing="0" cellpadding="0" border="0" >
                                            <tr>
                                                <td style="padding-right: 10px;">
                                                    <input type="submit" class="defaultText buttonStyle mobile-submit" value="Submit" style="color: white; background-color: #b6e455; font-size: 1.7rem; border: none; padding-left: 2.75rem; padding-right: 2.75rem; padding-top: 1rem; padding-bottom: 1rem;">
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    
                                </tr>
                            </table>
                        </div>
                        
                    </tr>
                    <tr>
                        <td>
                            <input type="hidden" name="Racecourse_18DN_AV" id="control_COLUMN25" value="Yes">
                        </td>
                    </tr>
                    <input type="hidden" name="formSourceName" value="StandardForm"><!-- DO NOT REMOVE HIDDEN FIELD sp_exp --><input type="hidden" name="sp_exp" value="yes">
                </table>
            </form>
        </div>
    </div>
</div>
</section>
<!-- Latest News -->
<?php get_template_part( 'inc/carousels/news'); ?>
<!-- Latest News -->
<!-- Talk of the Town -->
<?php get_template_part( 'inc/feeds/social-feed'); ?>
<!-- Talk of the Town -->
<?php get_footer(); ?>
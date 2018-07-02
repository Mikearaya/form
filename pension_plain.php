<html>

<head>
    <title>Pension</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />

</head>

<body>



   
    <div class="print_block">
        <table class="full-width" border="1">
            <tr>
                <td align="center">
                    <img src="img/fdre_logo.jpg" width="66" />
                </td>
                <td width="38%" style="background-color: #666; color: #FFF;">
                    <div class="govt_office">
                        በኢትዮጵያ ፌዴራላዊ ዲሞክራሲያዊ ሪፐብሊክ
                        <br /> የኢትዮጵያ ገቢዎችና ጉምሩክ ባለሥልጣን
                    </div>
                </td>
                <td width="42%" align="center">
                    <span class="form-title">
                        የግል ድርጅት ሠራተኞች የጡረታ መዋጮ ማሳወቂያ ቅፅ
                    </span>
                    <br />
                    <span style="font-size: 14px;"> (በግል ድርጅቶች ሠራተኞች ጡረታ አዋጅ ቁጥር 715/2003)</span>
                </td>
                <td align="center">
                    <img src="img/erca_logo.gif" width="66" />
                </td>
            </tr>
        </table>

        <div class="table-title">ክፍል 1 - የጡረታ መዋጮውን የሚከፍለው ድርጅት ዝርዝር መረጃ</div>

        <table class="full-width" border="1">
            <tr>
                <td colspan="3" rowspan="2" valign="top">1. የግብር ከፋይ ስም
                    <br />
                    &nbsp;
                </td>
                <td rowspan="2" valign="top" style="width: 140px;">3. የግብር ከፋይ መለያ ቁጥር
                    <br />
                    &nbsp;
                </td>
                <td rowspan="2" valign="top">4. የግብር ሂሳብ ቁጥር</td>
                <td colspan="2" valign="top" align="center" style="line-height: 10px;">8. የክፍያ ግዜ</td>
                <td rowspan="2" width="8%" align="center" class="english">Page </td>
            </tr>
            <tr style="line-height: 10px;">
                <td width="100">ወር
                &nbsp;
                    <span class="print " id="print-month-1"></span>
                </td>
                <td width="100">ዓ.ም.
                &nbsp;
                </td>
            </tr>
            <tr>
                <td valign="top">2a. ክልል
                    <br />
                    &nbsp;
                </td>
                <td colspan="2" valign="top">2b. ዞን/ክፍለ ከተማ
                    <br />
                    &nbsp;
                </td>
                <td colspan="2" valign="top">5. የግብር ስብሰቢ መ/ቤት ስም</td>
                <td rowspan="1" colspan="3" valign="top">የሰነድ ቁጥር (ለቢሮ አገልግሎት ብቻ)</td>
            </tr>
            <tr>
                <td>2c. ወረዳ
                    <br />
                    &nbsp;
                </td>
                <td>2d. ቀበሌ/የገበሬ ማህበር
                    <br />
                    &nbsp;
                </td>
                <td>2e. የቤት ቁጥር
                    <br />
                    &nbsp;
                </td>
                <td>6. ስልክ ቁጥር
                    <br />
                    &nbsp;
                </td>
                <td>7. ፋክስ ቁጥር
                    <br />
                    &nbsp;
                </td>
            </tr>
        </table>
        <div class="table-title">ክፍል 2 - ማስታወቂያ ዝርዝር መረጃ</div>
        <table width="100%" class="full-width" border="1">
            <tr align="center">
                <td style="width: 20px;">ሀ) ተ.ቁ</td>
                <td style="line-height: 12px;" width="10%">ለ) የቋሚ የሠራተኛው የግብር ከፋይ መለያ ቁጥር (TIN)</td>
                <td width="25%">ሐ) የሠራተኛው ስም /ስም የአባት ስምና የአያት ስም/</td>
                <td>መ) የተቀጠሩበት ቀን /ቀን/ወር/ዓም/</td>
                <td>ሠ) የወር ደመወዝ /ብር/</td>
                <td width="10%">ረ) የሰራተኛው መዋጮ መጠን
                    <br />7% /ብር/</td>
                <td style="line-height: 11px;" width="9%">ሰ) የአሰሪው
                    <br />መዋጮ መጠን
                    <br />11% /ብር/</td>
                <td width="11%">ሸ) በአሰሪው የሚገባ ጥቅል መዋጮ
                    <br />18% /ብር/ (ረ + ሰ)</td>
                <td>ፊርማ</td>
            </tr>
<?php for ($i = 1; $i <5; $i++) { ?>
            <tr class='text-input-tr'>
                <td>
                    <span id='row_no-b1'><?php echo $i ?></span>
                </td>
                <td>
                &nbsp;
                </td>
                <td>
                &nbsp;
                </td>
                <td>
                &nbsp;
                </td>
                <td>
                &nbsp;
                </td>
                <td>
                &nbsp;
                </td>
                <td>
                &nbsp;
                </td>
                <td>
                &nbsp;
                </td>
                <td>
                &nbsp;
                </td>
            </tr>
<?php } ?>
            
            <tr>
                <td colspan="4" align="right">ከአባሪ ቅጾች የመጣ ድምር</td>
                <td>
                &nbsp;
                </td>
                <td>
                    <input type="text" size="10" />
                </td>
                <td>
                    <input type="text" size="10" />
                </td>
                <td>
                    <input type="text" />
                </td>
            </tr>
            <tr>
                <td colspan="4" align="right">ድምር</td>
                <td>
                &nbsp;
                </td>
                <td>
                &nbsp;
                </td>
                <td>
                &nbsp;
                </td>
                <td>
                &nbsp;
                &nbsp;
                </td>
            </tr>
        </table>

        <table width="100%" class="table-title full-width" border="0">
            <tr>
                <td>ክፍል 3 - የወሩ የተጠቃለለ ሂሳብ</td>
                <td>ክፍል 4 - በዚህ ወር የሥራ ውላቸው የተቋረጠ ሠራተኞች ዝርዝር መረጃ</td>
                <td>ለቢሮ አገልግሎት ብቻ</td>
            </tr>
        </table>
        <table width="100%" class="full-width" border="0">
            <tr>
                <td width="45%" valign="top">
                    <table class="full-width" border="1">
                        <tr>
                            <td width="1%"></td>
                            <td width="20%">በዚህ ወር ደመወዝ የሚከፈላቸው የሠራተኞች ብዛት</td>
                            <td width="10%">
                            &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>የወሩ ጠቅላላ የሠራተኞች ደመወዝ (ከላይ ካለው ከሠንጠረዥ (ሠ))</td>
                            <td>
                            &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>የወሩ ጠቅላላ የሠራተኞች መዋጮ መጠን (ከላይ ካለው ከሠንጠረዥ (ረ))</td>
                            <td>
                            &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td>የወሩ ጠቅላላ የአሰሪው መዋጮ መጠን (ከላይ ካለው ከሠንጠረዥ (ሰ))</td>
                            <td>
                            &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td>50</td>
                            <td>የወሩ ጠቅላላ ጥቅል መዋጮ መጠን (ከላይ ካለው ከሠንጠረዥ (ሸ))</td>
                            <td>
                            &nbsp;
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="35%" valign="top">
                    <table class="full-width" border="1">
                        <tr>
                            <td width="1%">ተ.ቁ</td>
                            <td width="20%">የሠራተኛው የግብር
                                <br />ከፋይ ቁጥር</td>
                            <td width="30%">የሠራተኛው /ስም የአባት ስምና የአያት ስም/</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            &nbsp;
                            </td>
                            <td>
                            &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            &nbsp;
                            </td>
                            <td>
                            &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            &nbsp;
                            </td>
                            <td>
                            &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            &nbsp;
                            </td>
                            <td>
                            &nbsp;
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="20%" valign="top">
                    <table width="100%" class="data table4" border="1">
                        <tr>
                            <td width="42%">የተከፈለበት ቀን</td>
                            <td>
                            &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td>የደረሰኝ ቁጥር</td>
                            <td>
                            &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td>የገንዘብ ልክ</td>
                            <td>
                            &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td>ቼክ ቁጥር</td>
                            <td>
                            &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td nowrap>የገንዘብ ተቀባይ ፊርማ</td>
                            <td>
                            &nbsp;
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

        </table>
        <div class="table-title">ክፍል 5 - የትክክለኛነት ማረጋገጫ</div>
        <table width="100%" border="1">
            <tr>
                <td width="50%" style="line-height: 20px;">በላይ የተገለፀው ማስታወቂያና የተሰጠው መረጃ በሙሉ የተሞላና ትክክለኛ መሆኑን አረጋግጣለሁ፡፡ ትክክለኛ ያልሆነ መረጃ ማቅረብ በግብር ሕጎችም ሆነ በወንጀለኛ መቅጫ ሕግ
                    የሚያስቀጣ መሆኑን እገነዘባለሁ፡፡</td>
                <td>የግብር ከፋዩ/ሕጋዊ ወኪሉ
                    <br />ስም
                    &nbsp;
                    <br />ፊርማ
                    &nbsp;
                    &nbsp;
                </td>
                <td width="12%" valign="top" align="center">ማህተም</td>
                <td width="20%">የግብር ባለሥልጣን ስም
                &nbsp;
                    <br />ፊርማ
                    &nbsp;
                    <br />ቀን
                    &nbsp;
                </td>
            </tr>
        </table>

        <small class="english">
            <span class="right_spaced">Generated by www.eGenzeb.com</span>
            <span class="right_spaced">Ethiopian Revenue and Customs Authority (as of 8--/5/2011)</span>
            ERCA Form ---- (P1/2011)
        </small>
        <br />
        <small>ማሳሰቢያ፦ የሠራተኞችን ዝርዝር መሙያ ተጨማሪ ቦታ ካስፈለገዎት የተጨማሪ ማስታወቂያ ቅፁን ይጠቀሙ</small>
    </div>




    <!--One page containing div-->
    <div class="page-separator"></div>
    <div class="print_block">
        <table class="full-width" border="1">
            <tr>
                <td align="center">
                    <img src="img/fdre_logo.jpg" width="66" />
                </td>
                <td width="38%" style="background-color: #666; color: #FFF;">
                    <div class="govt_office">
                        በኢትዮጵያ ፌዴራላዊ ዲሞክራሲያዊ ሪፐብሊክ
                        <br /> የኢትዮጵያ ገቢዎችና ጉምሩክ ባለሥልጣን
                    </div>
                </td>
                <td width="42%" align="center">
                    <span class="form_title">
                        የግል ድርጅት ሠራተኞች የጡረታ መዋጮ ማሳወቂያ ቅፅ
                    </span>
                    <br />
                    <span style="font-size: 14px;"> (በግል ድርጅቶች ሠራተኞች ጡረታ አዋጅ ቁጥር 715/2003)
                        <br />ቅጽ ቁጥር 2/2003 የተጨማሪ ማስታወቂያ ቀጽ</span>
                </td>
                <td align="center">
                    <img src="img/erca_logo.gif" width="66" />
                </td>
            </tr>
        </table>
        <div class="table-title">ክፍል - 1 የጡረታ መዋጮውን የሚከፍለው ድርጅት ዝርዝር መረጃ</div>
        <table width="100%" class="table1" border="1">
            <tr>
                <td colspan="3" rowspan="2" valign="top">1. የግብር ከፋይ ስም
                    <br />
                    <input type="text"  id="name-b" name="name" />
                </td>
                <td rowspan="2" valign="top">2. የግብር ከፋይ መለያ ቁጥር
                    <br />
                    <input type="text" class="subtle_box replicate" id="tin-b" name="tin" size="10" />
                </td>
                <td colspan="2" valign="top" align="center" style="line-height: 10px;">8. የክፍያ ግዜ</td>
                <td rowspan="2" width="8%" align="center" class="english">Page
                    <span class="this_page">2</span> of
                    <span class="page_count">2</span>
                </td>
            </tr>
            <tr style="line-height: 10px;">
                <td width="100">ወር
                &nbsp;
                    <span class="print print_month" id="print_month-b"></span>
                </td>
                <td width="90">ዓ.ም.
                &nbsp;
                </td>
            </tr>
        </table>

        <div class="table-title">ክፍል 2 - ማስታወቂያ ዝርዝር መረጃ</div>
        <table width="100%" class="full-width" border="1">
            <tr align="center">
                <td style="width: 20px;">ሀ) ተ.ቁ</td>
                <td style="line-height: 12px;" width="10%">ለ) የቋሚ የሠራተኛው የግብር ከፋይ መለያ ቁጥር (TIN)</td>
                <td width="25%">ሐ) የሠራተኛው ስም /ስም የአባት ስምና የአያት ስም/</td>
                <td>መ) የተቀጠሩበት ቀን /ቀን/ወር/ዓም/</td>
                <td>ሠ) የወር ደመወዝ /ብር/</td>
                <td width="10%">ረ) የሰራተኛው መዋጮ መጠን
                    <br />7% /ብር/</td>
                <td style="line-height: 11px;" width="9%">ሰ) የአሰሪው
                    <br />መዋጮ መጠን
                    <br />11% /ብር/</td>
                <td width="11%">ሸ) በአሰሪው የሚገባ ጥቅል መዋጮ
                    <br />18% /ብር/ (ረ + ሰ)</td>
                <td>ፊርማ</td>
            </tr>
<?php for ($i = 0; $i <=15; $i++) { ?>
            <tr class='text-input-tr'>
                <td>
                    <span id='row_no-b1'><?php echo $i ?></span>
                </td>
                <td>
                &nbsp;
                </td>
                <td>
                &nbsp;
                </td>
                <td>
                &nbsp;
                </td>
                <td>
                &nbsp;
                </td>
                <td>
                &nbsp;
                </td>
                <td>
                &nbsp;
                </td>
                <td>
                &nbsp;
                </td>
                <td>
                &nbsp;
                </td>
            </tr>
<?php } ?>
            
            <tr>
                <td colspan="4" align="right">ከአባሪ ቅጾች የመጣ ድምር</td>
                <td>
                &nbsp;
                </td>
                <td>
                    <input type="text" size="10" />
                </td>
                <td>
                    <input type="text" size="10" />
                </td>
                <td>
                    <input type="text" />
                </td>
            </tr>
            <tr>
                <td colspan="4" align="right">ድምር</td>
                <td>
                &nbsp;
                </td>
                <td>
                &nbsp;
                </td>
                <td>
                &nbsp;
                </td>
                <td>
                &nbsp;
                &nbsp;
                </td>
            </tr>
        </table>

        <table width="100%" class="full-width" border="0">
            <tr>
                <td>የግብር ከፋዩ/ሕጋዊ ወኪሉ ስም
                &nbsp;ፊርማ
                &nbsp; ቀን
                &nbsp;
                </td>
            </tr>
        </table>

        <small class="english">Generated by www.appdiv.com</small>

    </div>
    <!--End of one page containing div-->
</body>

</html>
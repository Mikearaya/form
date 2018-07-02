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
                    <input type="text" id="name-1" name="name[]" />
                </td>
                <td rowspan="2" valign="top" style="width: 140px;">3. የግብር ከፋይ መለያ ቁጥር
                    <br />
                    <input type="text" id="tin-1" name="tin[]" />
                </td>
                <td rowspan="2" valign="top">4. የግብር ሂሳብ ቁጥር</td>
                <td colspan="2" valign="top" align="center" style="line-height: 10px;">8. የክፍያ ግዜ</td>
                <td rowspan="2" width="8%" align="center" class="english">Page </td>
            </tr>
            <tr style="line-height: 10px;">
                <td width="100">ወር
                    <select class="screen">
                        <option value='መስከረም'>መስከረም</option>
                        <option value='ጥቅምት'>ጥቅምት</option>
                        <option value='ኅዳር'>ኅዳር</option>
                        <option value='ታህሣሥ'>ታህሣሥ</option>
                        <option value='ጥር'>ጥር</option>
                        <option value='የካቲት'>የካቲት</option>
                        <option value='መጋቢት'>መጋቢት</option>
                        <option value='ሚያዝያ'>ሚያዝያ</option>
                        <option value='ግንቦት'>ግንቦት</option>
                        <option value='ሰኔ'>ሰኔ</option>
                        <option value='ሐምሌ'>ሐምሌ</option>
                        <option value='ነሐሴ'>ነሐሴ</option>
                    </select>
                    <span class="print " id="print-month-1"></span>
                </td>
                <td width="100">ዓ.ም.
                    <span class="year">2005</span>
                </td>
            </tr>
            <tr>
                <td valign="top">2a. ክልል
                    <br />
                    <input type="text" id="region" name="region" />
                </td>
                <td colspan="2" valign="top">2b. ዞን/ክፍለ ከተማ
                    <br />
                    <input type="text" id="sub-city" name="sub_city" />
                </td>
                <td colspan="2" valign="top">5. የግብር ስብሰቢ መ/ቤት ስም</td>
                <td rowspan="1" colspan="3" valign="top">የሰነድ ቁጥር (ለቢሮ አገልግሎት ብቻ)</td>
            </tr>
            <tr>
                <td>2c. ወረዳ
                    <br />
                    <input type="text" id="woreda" />
                </td>
                <td>2d. ቀበሌ/የገበሬ ማህበር
                    <br />
                    <input type="text" id="kebelle" />
                </td>
                <td>2e. የቤት ቁጥር
                    <br />
                    <input type="text" id="house_no" />
                </td>
                <td>6. ስልክ ቁጥር
                    <br />
                    <input type="text" class="subtle_box" id="tel" />
                </td>
                <td>7. ፋክስ ቁጥር
                    <br />
                    <input type="text" class="subtle_box" id="fax" />
                </td>
            </tr>
        </table>
        <div class="table-title">ሠንጠረዥ 2 - ማስታወቂያ ዝርዝር መረጃ</div>

        <table width="100%" border="1" style="width: 100%;  border-width: 1px;
                border-collapse: collapse;">
            <tbody>
                <tr style="width: inherit" align="center" style="line-height: 15px;">
                    <td> ሀ) ተ.ቁ</td>
                    <td> ለ) የቋሚ የሠራተኛው የግብር ከፋይ መለያ ቁጥር (TIN)</td>
                    <td> ሐ) የሠራተኛው ስም ፣ የአባት ስም እና የአያት ስም</td>
                    <td> መ) የተቀጠሩበት ቀን /ቀን/ወር/ዓም/</td>
                    <td> ሠ) የወር ደመወዝ /ብር/</td>
                    <td> ረ) የሰራተኛው መዋጮ መጠን
                        <br />7% /ብር/
                    </td>
                    <td>ሰ) የአሰሪው
                        <br />መዋጮ መጠን
                        <br />11% /ብር/</td>
                    <td>ሸ) በአሰሪው የሚገባ ጥቅል መዋጮ
                        <br />18% /ብር/ (ረ + ሰ)</td>
                    <td>ፊርማ</td>
                </tr>
<?php for($i = 1; $i <= 5; $i++) { ?>
                <tr class='text-input-tr'>
                    <td>
                        <span id='row_no-1'><?php echo $i ?></span>
                    </td>
                    <td>
                        <input type='text' name="tin[]" id='tin-1' />
                    </td>
                    <td>
                        <input type='text' name="name[]" id='name-1' />
                    </td>
                    <td>
                        <input type='text' name="hire_date[]" id='hire_date-1' />
                    </td>
                    <td>
                        <input type='text' name="salary[]" id='salary-1' data='-a' />
                    </td>
                    <td>
                        <input type='text' name="employee_contrib[]" id='employee_contrib-1' />
                    </td>
                    <td>
                        <input type='text' name="employer_contrib[]" id='employer_contrib-1' />
                    </td>
                    <td>
                        <input type='text' name="total_contrib[]" id='total_contrib-1' />
                    </td>
                    <td>
                        <input type='text' readonly='readonly' />
                    </td>
                </tr>
<?php } ?>
              
                <tr>
                    <td colspan="4" align="right">ከአባሪ ቅጾች ፣ የመጣ ድምር</td>
                    <td>
                        <input type="text" name="total-salary[]" id="total-salary-1" size="10" />
                    </td>
                    <td>
                        <input type="text" name="total-employee-contrib[]" id="total-employee-contrib-1" size="10" />
                    </td>
                    <td>
                        <input type="text" name="total-employer-contrib[]" id="total-employer-contrib-1" size="10" />
                    </td>
                    <td>
                        <input type="text" name="other-pages-total-contrib[]" id="other-pages-total-contrib-1" />
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="right">ድምር</td>
                    <td align="center">
                        <em>(line 20)</em>
                        <input type="hidden" id="total_salary-1" />
                    </td>
                    <td align="center">
                        <em>(line 30)</em>
                        <input type="hidden" id="total_employee_contrib-1" />
                    </td>
                    <td align="center">
                        <em>(line 40)</em>
                        <input type="hidden" id="total_employer_contrib-1" />
                    </td>
                    <td align="center">
                        <em>(line 50)</em>
                        <input type="hidden" id="total_contrib-1" />
                        <input type="hidden" id="count-1" />
                    </td>

                </tr>
            </tbody>
        </table>

        <table width="100%" class="table-title full-width" border="0">
            <tr>
                <td>ክፍል 3 - የወሩ የተጠቃለለ ሂሳብ</td>
                <td>ክፍል 4 - በዚህ ወር የሥራ ውላቸው የተቋረጠ ሠራተኞች ዝርዝር መረጃ</td>
                <td>ለቢሮ አገልግሎት ብቻ</td>
            </tr>
        </table>
        <table width="100%" class="full-width" border="0">
            <tr class="text-input-tr">
                <td width="40%" valign="top">
                    <table class="full-width" border="1">
                        <tr>
                            <td width="1%"></td>
                            <td width="20%">በዚህ ወር ደመወዝ የሚከፈላቸው የሠራተኞች ብዛት</td>
                            <td width="10%">
                                <input type="text" id="months-salaried" style="text-align: center;" />
                            </td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>የወሩ ጠቅላላ የሠራተኞች ደመወዝ (ከላይ ካለው ከሠንጠረዥ (ሠ))</td>
                            <td>
                                <input type="text" id="months_salary" style="text-align: center;" />
                            </td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>የወሩ ጠቅላላ የሠራተኞች መዋጮ መጠን (ከላይ ካለው ከሠንጠረዥ (ረ))</td>
                            <td>
                                <input type="text" id="months_employee_contrib" style="text-align: center;" />
                            </td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td>የወሩ ጠቅላላ የአሰሪው መዋጮ መጠን (ከላይ ካለው ከሠንጠረዥ (ሰ))</td>
                            <td>
                                <input type="text" id="months_employer_contrib" style="text-align: center;" />
                            </td>
                        </tr>
                        <tr>
                            <td>50</td>
                            <td>የወሩ ጠቅላላ ጥቅል መዋጮ መጠን (ከላይ ካለው ከሠንጠረዥ (ሸ))</td>
                            <td>
                                <input type="text" id="months_total_contrib" style="text-align: center;" />
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="35%" valign="top">
                    <table class="full-width" border="1">
                        <tr class="text-input-tr">
                            <td width="1%">ተ.ቁ</td>
                            <td width="20%">የሠራተኛው የግብር
                                <br />ከፋይ ቁጥር</td>
                            <td width="30%">የሠራተኛው /ስም የአባት ስምና የአያት ስም/</td>
                        </tr>
                        <tr class="text-input-tr">
                            <td>&nbsp;</td>
                            <td>
                                <input type="text" name="quit_tin[]" id="quit_tin-1" />
                            </td>
                            <td>
                                <input type="text" id="quit_name-1" />
                            </td>
                        </tr >
                        <tr class="text-input-tr">
                            <td>&nbsp;</td>
                            <td>
                                <input type="text" id="quit_tin2" />
                            </td>
                            <td>
                                <input type="text" id="quit_name2" />
                            </td>
                        </tr>
                        <tr class="text-input-tr">
                            <td>&nbsp;</td>
                            <td>
                                <input type="text" id="quit_tin3" />
                            </td>
                            <td>
                                <input type="text" id="quit_name3" />
                            </td>
                        </tr>
                        <tr class="text-input-tr">
                            <td>&nbsp;</td>
                            <td>
                                <input type="text" id="quit_tin4" />
                            </td>
                            <td>
                                <input type="text" id="quit_name4" />
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="25%" valign="top">
                    <table width="100%" class="data table4" border="1">
                        <tr class="text-input-tr">
                            <td width="42%">የተከፈለበት ቀን</td>
                            <td>
                                <input type="text" readonly="readonly" />
                            </td>
                        </tr>
                        <tr class="text-input-tr">
                            <td>የደረሰኝ ቁጥር</td>
                            <td>
                                <input type="text" readonly="readonly" />
                            </td>
                        </tr >
                        <tr class="text-input-tr">
                            <td>የገንዘብ ልክ</td>
                            <td>
                                <input type="text" readonly="readonly" />
                            </td>
                        </tr>
                        <tr class="text-input-tr">
                            <td>ቼክ ቁጥር</td>
                            <td>
                                <input type="text" readonly="readonly" />
                            </td>
                        </tr>
                        <tr class="text-input-tr">
                            <td nowrap>የገንዘብ ተቀባይ ፊርማ</td>
                            <td>
                                <input type="text" readonly="readonly" />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

        </table>
        <div class="table-title">ክፍል 5 - የትክክለኛነት ማረጋገጫ</div>
        <table width="100%" border="1">
            <tr>
                <td width="32%" style="line-height: 20px;">በላይ የተገለፀው ማስታወቂያና የተሰጠው መረጃ በሙሉ የተሞላና ትክክለኛ መሆኑን አረጋግጣለሁ፡፡ ትክክለኛ ያልሆነ መረጃ ማቅረብ በግብር ሕጎችም ሆነ በወንጀለኛ መቅጫ ሕግ
                    የሚያስቀጣ መሆኑን እገነዘባለሁ፡፡</td>
                <td>የግብር ከፋዩ/ሕጋዊ ወኪሉ
                    <br />ስም
                    <input type="text" id="signee-a" name="signee" size="30" />
                    <br />ፊርማ
                    <input type="text" size="10" readonly="readonly" /> ቀን
                    <input type="text" id="signature_date-a" name="signature_date" size="14" />
                </td>
                <td width="12%" valign="top" align="center">ማህተም</td>
                <td width="30%">የግብር ባለሥልጣን ስም
                    <input type="text" size="30" readonly="readonly" />
                    <br />ፊርማ
                    <input type="text" size="30" readonly="readonly" />
                    <br />ቀን
                    <input type="text" size="30" readonly="readonly" />
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
                    <select class="screen month" shadow="print_month-b">
                        <option value='መስከረም'>መስከረም</option>
                        <option value='ጥቅምት'>ጥቅምት</option>
                        <option value='ኅዳር'>ኅዳር</option>
                        <option value='ታህሣሥ'>ታህሣሥ</option>
                        <option value='ጥር'>ጥር</option>
                        <option value='የካቲት'>የካቲት</option>
                        <option value='መጋቢት'>መጋቢት</option>
                        <option value='ሚያዝያ'>ሚያዝያ</option>
                        <option value='ግንቦት'>ግንቦት</option>
                        <option value='ሰኔ'>ሰኔ</option>
                        <option value='ሐምሌ'>ሐምሌ</option>
                        <option value='ነሐሴ'>ነሐሴ</option>
                    </select>
                    <span class="print print_month" id="print_month-b"></span>
                </td>
                <td width="90">ዓ.ም.
                    <span class="year">2005</span>
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
<?php for($i = 0; $i <= 15; $i++) { ?>
            <tr  class='text-input-tr'>
                <td>
                    <span id='row_no-b1'><?php echo $i + 6 ?></span>
                </td>
                <td>
                    <input type='text' id='tin-b1' />
                </td>
                <td>
                    <input type='text' id='name-b1' />
                </td>
                <td>
                    <input type='text' id='hire_date-b1' />
                </td>
                <td>
                    <input type='text' id='salary-b1' data='-b' />
                </td>
                <td>
                    <input type='text' id='employee_contrib-b1' />
                </td>
                <td>
                    <input type='text' id='employer_contrib-b1' />
                </td>
                <td>
                    <input type='text' id='total_contrib-b1' />
                </td>
                <td>
                    <input type='text' readonly='readonly' />
                </td>
            </tr>
<?php } ?>
          
            <tr>
                <td colspan="4" align="right">ከአባሪ ቅጾች የመጣ ድምር</td>
                <td>
                    <input type="text" size="10" />
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
                    <input type="text" id="total_salary-b" size="10" />
                </td>
                <td>
                    <input type="text" id="total_employee_contrib-b" size="10" />
                </td>
                <td>
                    <input type="text" id="total_employer_contrib-b" size="10" />
                </td>
                <td>
                    <input type="text" id="total_contrib-b" />
                    <input type="hidden" id="count-b" />
                </td>
            </tr>
        </table>

        <table width="100%" class="full-width" border="0">
            <tr>
                <td>የግብር ከፋዩ/ሕጋዊ ወኪሉ ስም
                    <input type="text" id="signee-b" name="signee" size="30" /> ፊርማ
                    <input type="text" size="15" readonly="readonly" /> ቀን
                    <input type="text" id="signature_date-b" name="signature_date" size="18" />
                </td>
            </tr>
        </table>

        <small class="english">Generated by www.appdiv.com</small>

    </div>
    <!--End of one page containing div-->
</body>

</html>
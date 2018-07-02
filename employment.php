<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link href="css/style.css" rel="stylesheet" />
</head>

<body>

            <div class="print_block">
                <table border="1" class="full-width">
                    <tr>
                        <td align="center">
                            <img src="img/fdre_logo.jpg" width="66" />
                        </td>
                        <td width="38%" style="background-color: #666; color: #FFF;">
                            <div class="govt_office">
                                በኢትዮጵያ ፌዴራላዊ ዲሞክራሲያዊ ሪፐብሊክ የኢትዮጵያ ገቢዎችና ጉምሩክ ባለሥልጣን
                            </div>
                        </td>
                        <td width="42%" align="center">
                            <span class="form-header">
                                የሠንጠረዥ "ሀ" የስራ ግብር ክፍያ ማስታወቂያ ቅፅ (ለቀጣሪዎች)
                            </span>
                            <br /> (የገቢ ግብር አዋጅ ቁጥር 286/1996 እና ገቢ ግብር ደንብ ቁጥር 78/1994)
                        </td>
                        <td align="center">
                            <img src="img/erca_logo.gif" width="66" />
                        </td>
                    </tr>
                </table>
                <div style="clear: both;"></div>
   
                    <div class="table-title">ክፍል 1 - የግብር ከፋይ ዝርዝር መረጃ</div>
                    <table class="full-width" border="1">
                        <tr>
                            <td colspan="3" rowspan="2" valign="top">1. የግብር ከፋይ ስም
                                <br />
                                <input type="text" id="name" name="name" />
                            </td>
                            <td rowspan="2" valign="top" style="width: 140px;">3. የግብር ከፋይ መለያ ቁጥር
                                <br />
                                <input type="text" id="tin" name="tin" />
                            </td>
                            <td rowspan="2" valign="top">4. የግብር ሂሳብ ቁጥር</td>
                            <td colspan="2" valign="top" align="center" style="line-height: 10px;">8. የክፍያ ግዜ</td>
                            <td rowspan="2" width="8%" align="center" class="english">Page
                                <span class="this_page">1</span> of
                                <span class="page_count">2</span>
                            </td>
                        </tr>
                        <tr style="line-height: 10px;">
                            <td>ወር
                                <select class="screen month" shadow="print_month-a">
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
                                <span class="print print_month" id="print_month-a"></span>
                            </td>
                            <td width="90">ዓ.ም.
                                <span class="year">2005</span>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">2a. ክልል
                                <br />
                                <input type="text" name="region" id="region" />
                            </td>
                            <td colspan="2" valign="top">2b. ዞን/ክፍለ ከተማ
                                <br />
                                <input type="text" name="sub_city" id="sub-city" />
                            </td>
                            <td colspan="2" valign="top">5. የግብር ሰብሳቢ መ/ቤት ስም</td>
                            <td rowspan="2" colspan="3" valign="top">የሰነድ ቁጥር (ለቢሮ አገልግሎት ብቻ)</td>
                        </tr>
                        <tr>
                            <td valign="top">2c. ወረዳ
                                <br />
                                <input type="text" name="wereda" id="woreda" />
                            </td>
                            <td valign="top">2d. ቀበሌ/የገበሬ ማህበር
                                <br />
                                <input type="text" name="kebele" id="kebele" />
                            </td>
                            <td valign="top">2e. የቤት ቁጥር
                                <br />
                                <input type="text" name="house_no" id="house_no" />
                            </td>
                            <td valign="top">6. ስልክ ቁጥር
                                <br />
                                <input type="text" name="tel" id="tel" />
                            </td>
                            <td valign="top">7. ፋክስ ቁጥር
                                <br />
                                <input type="text" name="fax" id="fax" />
                            </td>
                        </tr>
                    </table>

                    <div class="table-title">ሠንጠረዥ 2 - ማስታወቂያ ዝርዝር መረጃ</div>
                    <table width="100%" class="full-width" style="width: 100%;  border-width: 1px;
                                                            border-collapse: collapse;" border="1">
                        <tr align="center">
                            <td rowspan="2">ሀ) ተ.ቁ</td>
                            <td rowspan="2" style="line-height: 11px;">ለ) የሠራተኛው
                                <br />የግብር ከፋይ
                                <br />መለያ ቁጥር (TIN)</td>
                            <td rowspan="2">ሐ) የሠራተኛው ስም ፣ የአባት ስም
                                <br />እና የአያት ስም</td>
                            <td rowspan="2">መ)
                                <br />የተቀጠሩበት
                                <br />ቀን</td>
                            <td rowspan="2">ሠ) ደመወዝ
                                <br />/ብር/</td>
                            <td rowspan="2">ረ) ጠቅላላ
                                <br />የትራንስፖርት
                                <br />አበል /ብር/</td>
                            <td colspan="3" style="line-height: 12px;">ተጨማሪ ክፍያዎች</td>
                            <td rowspan="2">በ) ጠቅላላ ግብር
                                <br />የሚከፈልበት
                                <br />ገቢ /ብር/
                                <br />(ሠ+ሰ+ሸ+ቀ)</td>
                            <td rowspan="2">ተ) የስራ
                                <br />ግብር
                                <br />/ብር/</td>
                            <td rowspan="2">ቸ)
                                <br />የትምህርት
                                <br />የወጪ
                                <br />መጋራት
                                <br />ክፍያ /ብር/</td>
                            <td rowspan="2">ገ) የተጣራ
                                <br />ተከፋይ
                                <br />/ብር/</td>
                            <td rowspan="2">የሠራተኛ
                                <br />ፊርማ</td>
                        </tr>
                        <tr style="line-height: 12px;" align="center">
                            <td>ሰ) የስራ ግብር
                                <br />የሚከፈልበት
                                <br />የትራንስፖርት
                                <br />አበል /ብር/</td>
                            <td>ሸ) የትርፍ
                                <br />ሰዓት ክፍያ
                                <br />/ብር/</td>
                            <td>ቀ) ሌሎች
                                <br />ጥቅማ
                                <br />ጥቅሞች
                                <br />/ብር/</td>
                        </tr>
<?php for ($i = 1; $i <= 5; $i++) { ?>   
                        <tr class="employee_list">
                            <td>
                                <span id='employe_list-' class="row-number"><?php echo $i ?></span>
                            </td>
                            <td>
                                <input type='text' name="tin[]" class="tin-input" id='tin-' />
                            </td>
                            <td>
                                <input type='text' name="name[]" class="name-input" id='name-' />
                            </td>
                            <td>
                                <input type='text' name="hire_date[]" class="hire-date-input" id='hire_date-' />
                            </td>
                            <td>
                                <input type='text' name="salary[]" class="salary-input" id='salary-' />
                            </td>
                            <td>
                                <input type='text' name="allowance[]" class="allowance-input" id='allowance-' />
                            </td>
                            <td>
                                <input type='text' name="taxable_allowance[]" class="taxable-allowance-input" id='taxable_allowance-' />
                            </td>
                            <td>
                                <input type='text' name="ot[]" class="ot-input" id='ot-' />
                            </td>
                            <td>
                                <input type='text' name="other_benefits[]" class="other-benefits-input" id='other_benefits-' />
                            </td>
                            <td>
                                <input type='text' name="taxable_salary[]" class="taxable-salary-input" id='taxable_salary-' />
                            </td>
                            <td>
                                <input type='text' name="tax[]" class="tax-input" id='tax-1' />
                            </td>
                            <td>
                                <input type='text' name="cost_sharing[]" class="cost-sharing-input" id='cost_sharing-' />
                            </td>
                            <td>
                                <input type='text' name="net_salary[]" class="net-pay-input" id='net_pay-' />
                            </td>
                            <td>
                                <input type='text' class="signiture-input" />
                            </td>
                        </tr>
<?php } ?>

                        <tr>
                            <td colspan="9" align="right">የሌሎች ተጨማሪ ቅጾች ድምር</td>
                            <td>
                                <input type="text" id="other_pages_total_taxable-b" size="10" />
                            </td>
                            <td>
                                <input type="text" id="other_pages_total_tax-b" size="10" />
                            </td>
                            <td>
                                <input type="text" size="10" />
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="9" align="right">ጠቅላላ ድምር</td>
                            <td>
                                <input type="text" id="total_taxable-b" size="10" />
                            </td>
                            <td>
                                <input type="text" id="total_tax-b" size="10" />
                            </td>
                            <td>
                                <input type="text" size="10" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="9" align="right" style="border: 0px solid #666;">&nbsp;</td>
                            <td align="center">
                                <em>
                                    <small>(line 20)</small>
                                </em>
                            </td>
                            <td align="center">
                                <em>
                                    <small>(line 30)</small>
                                </em>
                            </td>
                            <td>
                                <input type="hidden" id="count-b" />
                            </td>
                        </tr>
                    </table>

                <table width="100%" class="table-title full-width" border="0" style="padding-top: 0px;">

                    <tr>
                        <td>ክፍል 3 - የወሩ የተጠቃለለ ሂሳብ</td>
                        <td>ክፍል 4 - በዚህ ወር ሥራ የለቀቁ ሠራተኞች ዝርዝር መረጃ</td>
                        <td>ለቢሮ አገልግሎት ብቻ</td>
                    </tr>
                </table>
                <table width="100%" class="full-width" border="0">
                    <tr>
                        <td width="30%" valign="top">
                            <table width="100%"  border="1" style="line-height: 15px;">
                                <tr>
                                    <td width="1%">10</td>
                                    <td width="70%">በዚህ ወር ደመወዝ የሚከፈላቸው የሠራተኞች ብዛት</td>
                                    <td width="5%">
                                        <input type="text" name="months-salaried" id="months_salaried" style="text-align: center;" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>የወሩ ጠቅላላ የሥራ ግብር የሚከፈልበት ገቢ (ከላይ ካለው ከሠንጠረዥ (በ))</td>
                                    <td>
                                        <input type="text" name="months-taxable" id="months_taxable" style="text-align: center;" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>የወሩ ጠቅላላ መከፈል ያለበት የሥራ ግብር (ከላይ ካለው ከሠንጠረዥ (ተ))</td>
                                    <td>
                                        <input type="text" name="months-tax" id="months_tax" style="text-align: center;" />
                                    </td>
                            </tr>
                            </table>
                        </td>
                        <td width="45%" valign="top">
                            <table width="100%"  border="1" style="line-height: 20px;">
                                <tr style="line-height: 28px;">
                                    <td width="1%">ተ.ቁ</td>
                                    <td width="20%">የሠራተኛው የግብር ከፋይ ቁጥር</td>
                                    <td width="20%">የሠራተኛው /ስም የአባት ስምና የአያት ስም/</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                        <input type="text" name="quit_tin[]" id="quit_tin1" />
                                    </td>
                                    <td>
                                        <input type="text" name="quit_name[]" id="quit_name1" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                        <input type="text" name="quit_tin[]" id="quit_tin2" />
                                    </td>
                                    <td>
                                        <input type="text" name="quit_name[]" id="quit_name2" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                        <input type="text" name="quit_tin[]" id="quit_tin3" />
                                    </td>
                                    <td>
                                        <input type="text" name="quit_name[]" id="quit_name3" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                        <input type="text" name="quit_tin[]" id="quit_tin4" />
                                    </td>
                                    <td>
                                        <input type="text" name="quit_name[]" id="quit_name4" />
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td width="20%" valign="top">
                            <table width="100%"  border="1" style="line-height: 21px;">
                                <tr>
                                    <td width="42%">የተከፈለበት ቀን</td>
                                    <td>
                                        <input type="text" readonly="readonly" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>የደረሰኝ ቁጥር</td>
                                    <td>
                                        <input type="text" readonly="readonly" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>የገንዘብ ልክ</td>
                                    <td>
                                        <input type="text" readonly="readonly" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>ቼክ ቁጥር</td>
                                    <td>
                                        <input type="text" readonly="readonly" />
                                    </td>
                                </tr>
                                <tr>
                                    <td nowrap>የገንዘብ ተቀባይ ፊርማ</td>
                                    <td>
                                        <input type="text" readonly="readonly" />
                                    </td>
                                </tr>
                            </table>
                        </td>
                </table>
                <div class="table-title">ክፍል 5 - የትክክለኛነት ማረጋገጫ</div>
                <table class="full-width sub_data table3" border="1">
                    <tr>
                        <td width="32%" style="line-height: 15px;">በላይ የተገለፀው ማስታወቂያና የተሰጠው መረጃ በሙሉ የተሞላና ትክክለኛ መሆኑን አረጋግጣለሁ፡፡ ትክክለኛ ያልሆነ መረጃ ማቅረብ በግብር ሕጎችም ሆነ በወንጀለኛ
                            መቅጫ ሕግ የሚያስቀጣ መሆኑን እገነዘባለሁ፡፡</td>
                        <td>የግብር ከፋይ/ሕጋዊ ወኪሉ
                            <br />ስም &nbsp;
                            <input type="text" class="underlined_box ethiopic replicate" id="signee-a" name="signee" size="30" />
                            <br />ፊርማ
                            <input type="text" class="underlined_box" size="10" readonly="readonly" /> &nbsp; ቀን
                            <input type="text" class="underlined_box date replicate" id="signature_date-a" name="signature_date" size="13" />
                        </td>
                        <td width="12%" valign="top" align="center">ማህተም</td>

                        <td width="30%">የግብር ባለሥልጣን ስም
                            <input type="text" class="underlined_box" readonly="readonly" />
                            <br />ፊርማ
                            <input type="text" class="underlined_box" readonly="readonly" />
                            <br />ቀን
                            <input type="text" class="underlined_box" readonly="readonly" />
                        </td>
                    </tr>
                </table>
                <small class="english">Generated by www.appdiv.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Ethiopian Revenue and Customs Authority &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    (Draft as of 07/08/06) ERCA Form 1103 (1/2006)</small>
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
                                የሠንጠረዥ "ሀ" የስራ ግብር ክፍያ ማስታወቂያ ቅፅ
                            </span>
                            <br /> ቅፅ ቁጥር 1103 ተጨማሪ ማስታወቂያ ቅፅ
                        </td>
                        <td align="center">
                            <img src="img/erca_logo.gif" width="66" />
                        </td>
                    </tr>
                </table>
                <div style="clear: both;"></div>

            <div>
                <div class="table-title">ክፍል 1 - የግብር ከፋይ ዝርዝር መረጃ</div>
                <table width="100%" class="table1" border="1">
                    <tr>
                        <td colspan="3" rowspan="2" valign="top">1. የግብር ከፋይ ስም
                            <br />
                            <input type="text" class="subtle_box replicate ethiopic" id="name-b" name="name" />
                        </td>
                        <td rowspan="2" valign="top">2. የግብር ከፋይ መለያ ቁጥር
                            <br />
                            <input type="text" class="subtle_box replicate" id="tin-b" name="tin" size="10" />
                        </td>
                        <td colspan="2" valign="top" align="center" style="line-height: 10px;">3. የክፍያ ግዜ</td>
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

                <div class="form-title">ክፍል 2 - ማስታወቂያ ዝርዝር መረጃ</div>
                <table width="100%" class="full-width" style="width: 100%;
                    border-width: 1px;
                    border-collapse: collapse;" border="1">
                    <tr align="center">
                        <td rowspan="2">ሀ) ተ.ቁ</td>
                        <td rowspan="2" style="line-height: 11px;">ለ) የሠራተኛው
                            <br />የግብር ከፋይ
                            <br />መለያ ቁጥር (TIN)</td>
                        <td rowspan="2">ሐ) የሠራተኛው ስም ፣ የአባት ስም
                            <br />እና የአያት ስም</td>
                        <td rowspan="2">መ)
                            <br />የተቀጠሩበት
                            <br />ቀን</td>
                        <td rowspan="2">ሠ) ደመወዝ
                            <br />/ብር/</td>
                        <td rowspan="2">ረ) ጠቅላላ
                            <br />የትራንስፖርት
                            <br />አበል /ብር/</td>
                        <td colspan="3" style="line-height: 12px;">ተጨማሪ ክፍያዎች</td>
                        <td rowspan="2">በ) ጠቅላላ ግብር
                            <br />የሚከፈልበት
                            <br />ገቢ /ብር/
                            <br />(ሠ+ሰ+ሸ+ቀ)</td>
                        <td rowspan="2">ተ) የስራ
                            <br />ግብር
                            <br />/ብር/</td>
                        <td rowspan="2">ቸ)
                            <br />የትምህርት
                            <br />የወጪ
                            <br />መጋራት
                            <br />ክፍያ /ብር/</td>
                        <td rowspan="2">ገ) የተጣራ
                            <br />ተከፋይ
                            <br />/ብር/</td>
                        <td rowspan="2">የሠራተኛ
                            <br />ፊርማ</td>
                    </tr>
                    <tr style="line-height: 12px;" align="center">
                        <td>ሰ) የስራ ግብር
                            <br />የሚከፈልበት
                            <br />የትራንስፖርት
                            <br />አበል /ብር/</td>
                        <td>ሸ) የትርፍ
                            <br />ሰዓት ክፍያ
                            <br />/ብር/</td>
                        <td>ቀ) ሌሎች
                            <br />ጥቅማ
                            <br />ጥቅሞች
                            <br />/ብር/</td>
                    </tr>
<?php for($i = 0; $i <= 15; $i++ ) { ?>
                    <tr class="employee_list">
                        <td>
                            <span id='employe_list-6' class="row-number"><?php echo $i + 6 ?></span>
                        </td>
                        <td>
                            <input type='text' name="tin[]" class="tin-input" id='tin-6' />
                        </td>
                        <td>
                            <input type='text' name="name[]" class="name-input" id='name-6' />
                        </td>
                        <td>
                            <input type='text' name="hire_date[]" class="hire-date-input" id='hire_date-6' />
                        </td>
                        <td>
                            <input type='text' name="salary[]" class="salary-input" id='salary-6' />
                        </td>
                        <td>
                            <input type='text' name="allowance[]" class="allowance-input" id='allowance-6' />
                        </td>
                        <td>
                            <input type='text' name="taxable_allowance[]" class="taxable-allowance-input" id='taxable_allowance-6' />
                        </td>
                        <td>
                            <input type='text' name="ot[]" class="ot-input" id='ot-6' />
                        </td>
                        <td>
                            <input type='text' name="other_benefits[]" class="other-benefits-input" id='other_benefits-6' />
                        </td>
                        <td>
                            <input type='text' name="taxable_salary[]" class="taxable-salary-input" id='taxable_salary-6' />
                        </td>
                        <td>
                            <input type='text' name="tax[]" class="tax-input" id='tax-6' />
                        </td>
                        <td>
                            <input type='text' name="cost_sharing[]" class="cost-sharing-input" id='cost_sharing-6' />
                        </td>
                        <td>
                            <input type='text' name="net_salary[]" class="net-pay-input" id='net_pay-6' />
                        </td>
                        <td>
                            <input type='text' class="signiture-input" />
                        </td>
                    </tr>
<?php } ?>
          
                    <tr>
                        <td colspan="9" align="right">የሌሎች ተጨማሪ ቅጾች ድምር</td>
                        <td>
                            <input type="text" id="other_pages_total_taxable-b" size="10" />
                        </td>
                        <td>
                            <input type="text" id="other_pages_total_tax-b" size="10" />
                        </td>
                        <td>
                            <input type="text" size="10" />
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="9" align="right">ጠቅላላ ድምር</td>
                        <td>
                            <input type="text" id="total_taxable-b" size="10" />
                        </td>
                        <td>
                            <input type="text" id="total_tax-b" size="10" />
                        </td>
                        <td>
                            <input type="text" size="10" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="9" align="right" style="border: 0px solid #666;">&nbsp;</td>
                        <td align="center">
                            <em>
                                <small>(line 20)</small>
                            </em>
                        </td>
                        <td align="center">
                            <em>
                                <small>(line 30)</small>
                            </em>
                        </td>
                        <td>
                            <input type="hidden" id="count-b" />
                        </td>
                    </tr>
                </table>
            </div>

            <br />
            <table width="100%" class="sub_data table3" border="0">
                <tr>
                    <td>የግብር ከፋይ/ሕጋዊ ወኪሉ ስም &nbsp;
                        <input type="text" class="underlined_box ethiopic replicate" id="signee-b" name="signee" size="30" /> ፊርማ
                        <input type="text" class="underlined_box" size="15" readonly="readonly" /> ቀን
                        <input type="text" class="underlined_box date replicate" id="signature_date-b" name="signature_date" size="18" /> ማህተም
                        <input type="text" class="underlined_box_dotted" size="15" readonly="readonly" />
                    </td>
                </tr>
            </table>

            <small class="english">
                <span class="righ_spaced">Generated by www.appdiv.com</span>
                <span class="righ_spaced">Ethiopian Revenue and Customs Authority</span>
                (as of 07/08/06) ERCA Form 1104 (1/2006)
            </small>
        </div>
        <button type="button" class="btn btn-danger btn-lg dont-print">Add</button>
        <button type="button" class="btn btn-primary btn-lg dont-print" onclick="window.print()">Print</button>
</body>

</html>
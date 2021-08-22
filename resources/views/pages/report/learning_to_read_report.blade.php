@php
    function grade($total){
      if($total < 50 && $total > 39){
          echo "D";
        }else if($total < 39 && $total > 0){
          echo "F";
        }else if($total >= 50 && $total < 60 ){
          echo 'C';
        }else if($total >= 60  && $total < 70 ){
          echo 'B';
        }else if($total >= 70  && $total <= 100 ){
          echo 'A';
        }else if($total == 0){
          echo '-';
        }
    }

    function remark($total){
      if($total < 50 && $total > 39){
          echo "Fair";
        }else if($total < 39 && $total > 0){
          echo "Poor";
        }else if($total >= 50 && $total < 60 ){
          echo 'Good';
        }else if($total >= 60  && $total < 70 ){
          echo 'V.Good';
        }else if($total >= 70  && $total <= 100 ){
          echo 'Excellent';
        }else if($total == 0){
          echo '-';
        }
    }
@endphp
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 12">
<meta name=Originator content="Microsoft Word 12">
<link rel=File-List href="{{ asset('global_assets/report/Learning%20to%20Read_filesfilelist.xml')}}">
<link rel=Edit-Time-Data href="{{ asset('global_assets/report/Learning%20to%20Read_fileseditdata.mso')}}">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>USER</o:Author>
  <o:LastAuthor>Ajirin</o:LastAuthor>
  <o:Revision>3</o:Revision>
  <o:TotalTime>8</o:TotalTime>
  <o:Created>2021-08-08T06:15:00Z</o:Created>
  <o:LastSaved>2021-08-08T06:19:00Z</o:LastSaved>
  <o:Pages>2</o:Pages>
  <o:Words>580</o:Words>
  <o:Characters>3312</o:Characters>
  <o:Company>HP</o:Company>
  <o:Lines>27</o:Lines>
  <o:Paragraphs>7</o:Paragraphs>
  <o:CharactersWithSpaces>3885</o:CharactersWithSpaces>
  <o:Version>12.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=themeData href="{{ asset('global_assets/report/Learning%20to%20Read_filesthemedata.thmx')}}">
<link rel=colorSchemeMapping
href="{{ asset('global_assets/report/Learning%20to%20Read_filescolorschememapping.xml')}}">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
  <w:PunctuationKerning/>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>EN-US</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
   <w:DontVertAlignCellWithSp/>
   <w:DontBreakConstrainedForcedTables/>
   <w:DontVertAlignInTxbx/>
   <w:Word11KerningPairs/>
   <w:CachedColBalance/>
  </w:Compatibility>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="--"/>
   <m:smallFrac/>
   <m:dispDef/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"
  DefSemiHidden="true" DefQFormat="false" DefPriority="99"
  LatentStyleCount="267">
  <w:LsdException Locked="false" Priority="0" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 3"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 4"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 5"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 6"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 7"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 8"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 9"/>
  <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" Priority="10" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" Priority="11" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" Priority="22" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" SemiHidden="false" UnhideWhenUsed="false"
   Name="Normal Table"/>
  <w:LsdException Locked="false" SemiHidden="false" UnhideWhenUsed="false"
   Name="Table Subtle 1"/>
  <w:LsdException Locked="false" SemiHidden="false" UnhideWhenUsed="false"
   Name="Table Web 2"/>
  <w:LsdException Locked="false" SemiHidden="false" UnhideWhenUsed="false"
   Name="Table Web 3"/>
  <w:LsdException Locked="false" Priority="59" SemiHidden="false"
   UnhideWhenUsed="false" Name="Table Grid"/>
  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>
  <w:LsdException Locked="false" Priority="34" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/>
 </w:LatentStyles>
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:1;
	mso-generic-font-family:roman;
	mso-font-format:other;
	mso-font-pitch:variable;
	mso-font-signature:0 0 0 0 0 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-536859905 -1073732485 9 0 511 0;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-520081665 -1073717157 41 0 66047 0;}
@font-face
	{font-family:"Agency FB";
	panose-1:2 11 5 3 2 2 2 2 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:3 0 0 0 1 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:8.0pt;
	margin-left:0in;
	line-height:107%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-link:"Header Char";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 3.0in right 6.0in;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:"Times New Roman";}
a:link, span.MsoHyperlink
	{mso-style-priority:99;
	color:#0563C1;
	mso-themecolor:hyperlink;
	text-decoration:underline;
	text-underline:single;}
a:visited, span.MsoHyperlinkFollowed
	{mso-style-noshow:yes;
	mso-style-priority:99;
	color:#954F72;
	mso-themecolor:followedhyperlink;
	text-decoration:underline;
	text-underline:single;}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-link:"Balloon Text Char";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:8.0pt;
	font-family:"Tahoma","sans-serif";
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;}
p.MsoNoSpacing, li.MsoNoSpacing, div.MsoNoSpacing
	{mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	mso-style-link:"No Spacing Char";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;}
span.NoSpacingChar
	{mso-style-name:"No Spacing Char";
	mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"No Spacing";}
span.HeaderChar
	{mso-style-name:"Header Char";
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:Header;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-hansi-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
span.BalloonTextChar
	{mso-style-name:"Balloon Text Char";
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Balloon Text";
	mso-ansi-font-size:8.0pt;
	mso-bidi-font-size:8.0pt;
	font-family:"Tahoma","sans-serif";
	mso-ascii-font-family:Tahoma;
	mso-hansi-font-family:Tahoma;
	mso-bidi-font-family:Tahoma;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;}
.MsoPapDefault
	{mso-style-type:export-only;
	margin-bottom:8.0pt;
	line-height:107%;}
@page Section1
	{size:841.95pt 595.35pt;
	mso-page-orientation:landscape;
	margin:.5in .5in .5in .5in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-columns:2 even .5in;
	mso-paper-source:0;}
div.Section1
	{page:Section1;}
@page Section2
	{size:841.95pt 595.35pt;
	mso-page-orientation:landscape;
	margin:.2in 44.65pt .5in .5in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.Section2
	{page:Section2;}
@page Section3
	{size:841.95pt 595.35pt;
	mso-page-orientation:landscape;
	margin:.2in 44.65pt .5in .5in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.Section3
	{page:Section3;}
@page Section4
	{size:11.0in 8.5in;
	mso-page-orientation:landscape;
	margin:12.25pt .5in .5in .5in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.Section4
	{page:Section4;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-qformat:yes;
	mso-style-parent:"";
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-para-margin-top:0in;
	mso-para-margin-right:0in;
	mso-para-margin-bottom:8.0pt;
	mso-para-margin-left:0in;
	line-height:107%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;}
table.MsoTableGrid
	{mso-style-name:"Table Grid";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-priority:59;
	mso-style-unhide:no;
	border:solid black .5pt;
	mso-border-themecolor:text1;
	mso-border-alt:solid black .5pt;
	mso-border-themecolor:text1;
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-border-insideh:.5pt solid black;
	mso-border-insideh-themecolor:text1;
	mso-border-insidev:.5pt solid black;
	mso-border-insidev-themecolor:text1;
	mso-para-margin:0in;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="2050"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=EN-US link="#0563C1" vlink="#954F72" style='tab-interval:.5in'>
<b style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
style='font-size:16.0pt;mso-bidi-font-size:11.0pt;line-height:107%;font-family:
"Agency FB","sans-serif";mso-fareast-font-family:Calibri;mso-fareast-theme-font:
minor-latin;mso-bidi-font-family:"Times New Roman";color:red;mso-ansi-language:
EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:auto;mso-break-type:section-break'>
</span></i></b>
{{-- {{ json_encode($report) }} --}}

{{-- {{ $report->maths_ca_ex }} --}}
<div class=Section2><br clear=all style='page-break-before:always'>

<p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
style='mso-no-proof:yes'><!--[if gte vml 1]><v:shape id="Picture_x0020_1"
 o:spid="_x0000_i1025" type="#_x0000_t75" style='width:48.75pt;height:50.25pt;
 visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="{{ asset('global_assets/report/Learning%20to%20Read_filesimage001.emz') }}" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=65 height=67
src="{{ asset('global_assets/report/Learning%20to%20Read%20form_files/image003.png') }}" v:shapes="Picture_x0020_1"><![endif]></span><span
class=NoSpacingChar><b style='mso-bidi-font-weight:normal'><span
style='font-size:38.0pt;font-family:"Times New Roman","serif";color:#44546A;
mso-themecolor:text2'>TRUMPET SOUND ACADEMY MINNA<o:p></o:p></span></b></span></p>

<p class=MsoNoSpacing align=center style='text-align:center'><b
style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif";
color:red'>#149, NEAR VITAL FEEDS, BOSSO LOW-COST, P.O. BOX, 2447, MINNA, NIGER
STATE</span></i></b><i style='mso-bidi-font-style:normal'><span
style='font-family:"Times New Roman","serif"'>&nbsp;<span
style='mso-spacerun:yes'>   </span></span></i><i style='mso-bidi-font-style:
normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif";color:red'>WEBSITE</span></i><i style='mso-bidi-font-style:
normal'><span style='font-family:"Times New Roman","serif"'>:&nbsp;</span></i><a
href="about:blank"><i style='mso-bidi-font-style:normal'><span
style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>www.trumpetsound.com</span></i></a><b
style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif";
color:red'> E-MAIL- </span></i></b><a href="about:blank"><i style='mso-bidi-font-style:
normal'><span style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>tsahqnigeria@yahoo.com</span></i></a><b
style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif";
color:red'>TEL: 081-0463-8140, 090-3344-9494.<o:p></o:p></span></i></b></p>

<p class=MsoNoSpacing align=center style='text-align:center'><b
style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
10.0pt;font-family:"Times New Roman","serif";color:#00B050'>PROGRESS REPORT
SHEET<o:p></o:p></span></b></p>

<p class=MsoNoSpacing align=center style='text-align:center'><b
style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
10.0pt;font-family:"Times New Roman","serif";color:#002060'>NAME: </span></b><b
style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
10.0pt;font-family:"Times New Roman","serif";color:black;mso-themecolor:text1'>{{ $student->name }}<span style='mso-tab-count:1'><o:p>&nbsp;&nbsp;&nbsp;</o:p></span></span></b><b
style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
10.0pt;font-family:"Times New Roman","serif";color:#002060'>ADM. NO.:<span
style='mso-spacerun:yes'>  </span></span></b><b style='mso-bidi-font-weight:
normal'><span style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:
"Times New Roman","serif"'>{{$student_id}} <span style='color:#002060'><span
style='mso-tab-count:1'><o:p>&nbsp;&nbsp;&nbsp;</o:p></span>BIRTHDATE:<span
style='mso-spacerun:yes'>  </span></span>2ND FEBRUARY, 2016<span
style='mso-tab-count:2'><o:p>&nbsp;&nbsp;&nbsp;</o:p></span><span style='color:#002060'>STATE:<span
style='mso-spacerun:yes'><o:p>&nbsp;&nbsp;&nbsp;</o:p></span></span>NIGER<span style='mso-tab-count:1'><o:p>&nbsp;&nbsp;&nbsp;</o:p></span><span
style='color:#002060'>SCHOOL YEAR: </span>2020/2021<span style='color:#002060'><span
style='mso-tab-count:1'><o:p>&nbsp;&nbsp;&nbsp;</o:p></span>TERM: SECOND<o:p></o:p></span></span></b></p>

<p class=MsoNoSpacing align=center style='text-align:center'><b
style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
10.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNoSpacing align=center style='text-align:center'><b
style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
10.0pt;font-family:"Times New Roman","serif";color:#002060'>CLASS:_</span></b><b
style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
10.0pt;font-family:"Times New Roman","serif"'>LR<span style='color:#002060'><span
style='mso-tab-count:2'>                            </span>NO. IN CLASS:<span
style='mso-tab-count:1'>      </span></span>07<span style='color:#002060'><span
style='mso-tab-count:1'>            </span>DAYS PRESENT:<span style='mso-tab-count:
1'>   </span></span>42<span style='color:#002060'><span style='mso-tab-count:
1'>            </span>DAYS ABSENT:<span style='mso-tab-count:1'>     </span></span>0<span
style='color:#002060'><span style='mso-tab-count:1'>              </span>SUPERVISOR:<span
style='mso-tab-count:1'>       </span></span>MRS. DIANA DAVID<span
style='color:#002060'><o:p></o:p></span></span></b></p>

<div align=center>
<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=1030
 style='width:772.3pt;border-collapse:collapse;border:none;mso-border-alt:solid black .5pt;
 mso-border-themecolor:text1;mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=395 colspan=11 valign=top style='width:296.15pt;border:solid black .5pt;
  mso-border-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;font-family:
  "Times New Roman","serif";color:red'>SECTION A:<span
  style='mso-spacerun:yes'>           </span>SUMMARY OF PACE WORK</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p></o:p></span></b></p>
  </td>
  <td width=24 rowspan=23 valign=top style='width:.25in;border:solid black .5pt;
  mso-border-themecolor:text1;border-left:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman","serif";
  color:#00B050'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=611 colspan=13 valign=top style='width:458.15pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-left:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;font-family:
  "Times New Roman","serif";color:red'>SECTION B:SUMMARY OF CURRICULAR WORK</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=75 valign=top style='width:56.05pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=320 colspan=10 valign=top style='width:240.1pt;border-top:none;
  border-left:solid black .5pt;border-bottom:solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right:solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Times New Roman","serif";color:#002060'>DETAILS<o:p></o:p></span></b></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:solid black .5pt;
  border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman","serif";color:#002060'>SUBJECT<o:p></o:p></span></b></p>
  </td>
  <td width=168 colspan=5 valign=top style='width:1.75in;border-top:none;
  border-left:solid black .5pt;border-bottom:solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right:solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:7.0pt;mso-bidi-font-size:9.0pt;
  font-family:"Times New Roman","serif";color:#002060'>CONTINUOUS
  ASSESSMENT(C.A)</span><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p></o:p></span></b></p>
  </td>
  <td width=36 rowspan=2 valign=top style='width:27.0pt;border-top:none;
  border-left:solid black .5pt;border-bottom:solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right:solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:5.0pt;
  font-family:"Times New Roman","serif";color:#002060'>EXAM SCORE<o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:5.0pt;
  font-family:"Times New Roman","serif";color:#002060'>60%<b style='mso-bidi-font-weight:
  normal'><o:p></o:p></b></span></p>
  </td>
  <td width=48 rowspan=2 valign=top style='width:.5in;border-top:none;
  border-left:solid black .5pt;border-bottom:solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right:solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:5.0pt;
  font-family:"Times New Roman","serif";color:#002060'>TOTAL SCORE<o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:5.0pt;
  font-family:"Times New Roman","serif";color:#002060'>100%<b style='mso-bidi-font-weight:
  normal'><o:p></o:p></b></span></p>
  </td>
  <td width=48 rowspan=2 valign=top style='width:.5in;border-top:none;
  border-left:solid black .5pt;border-bottom:solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right:solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:5.0pt;
  font-family:"Times New Roman","serif";color:#002060'>SUBJECT GRADE<b
  style='mso-bidi-font-weight:normal'><o:p></o:p></b></span></p>
  </td>
  <td width=48 rowspan=2 valign=top style='width:.5in;border-top:none;
  border-left:solid black .5pt;border-bottom:solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right:solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:5.0pt;
  font-family:"Times New Roman","serif";color:#002060'>SUBJECT POSITION<b
  style='mso-bidi-font-weight:normal'><o:p></o:p></b></span></p>
  </td>
  <td width=48 rowspan=2 valign=top style='width:.5in;border-top:none;
  border-left:solid black .5pt;border-bottom:solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right:solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:5.0pt;
  font-family:"Times New Roman","serif";color:#002060'>CLASS HIGHEST SCORE<b
  style='mso-bidi-font-weight:normal'><o:p></o:p></b></span></p>
  </td>
  <td width=42 rowspan=2 valign=top style='width:31.5pt;border-top:none;
  border-left:solid black .5pt;border-bottom:solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right:solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:5.0pt;
  font-family:"Times New Roman","serif";color:#002060'>CLASS LOWEST SCORE<b
  style='mso-bidi-font-weight:normal'><o:p></o:p></b></span></p>
  </td>
  <td width=89 rowspan=2 valign=top style='width:66.65pt;border-top:none;
  border-left:solid black .5pt;border-bottom:solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right:solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:5.0pt;
  font-family:"Times New Roman","serif";color:#002060'>Subject Teacher s REMARK<b
  style='mso-bidi-font-weight:normal'><o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=75 valign=top style='width:56.05pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>Bible
  Memory<o:p></o:p></span></b></p>
  </td>
  <td width=320 colspan=10 valign=top style='width:240.1pt;border-top:none;
  border-left:solid black .5pt;border-bottom:solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right:solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman","serif";
  color:#002060'>Matthew 5:1-16<o:p></o:p></span></b></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:solid black .5pt;
  border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:solid black .5pt;
  border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:5.0pt;
  font-family:"Times New Roman","serif";color:#002060'>CA 1<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:5.0pt;
  font-family:"Times New Roman","serif";color:#002060'>10%<o:p></o:p></span></b></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:solid black .5pt;
  border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:5.0pt;
  font-family:"Times New Roman","serif";color:#002060'>CA 1<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:5.0pt;
  font-family:"Times New Roman","serif";color:#002060'>10%<o:p></o:p></span></b></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:solid black .5pt;
  border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:5.0pt;
  font-family:"Times New Roman","serif";color:#002060'>CA 1<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:5.0pt;
  font-family:"Times New Roman","serif";color:#002060'>10%<o:p></o:p></span></b></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:solid black .5pt;
  border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:5.0pt;
  font-family:"Times New Roman","serif";color:#002060'>CA 1<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:5.0pt;
  font-family:"Times New Roman","serif";color:#002060'>10%<o:p></o:p></span></b></p>
  </td>
  <td width=48 valign=top style='width:.5in;border-top:none;border-left:solid black .5pt;
  border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:5.0pt;
  font-family:"Times New Roman","serif";color:#002060'>TOTAL C.A40%<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:8.5pt'>
  <td width=75 valign=top style='width:56.05pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:8.5pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>Bible
  Reading<o:p></o:p></span></b></p>
  </td>
  <td width=320 colspan=10 valign=top style='width:240.1pt;border-top:none;
  border-left:solid black .5pt;border-bottom:solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right:solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt;
  height:8.5pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=84 valign=bottom style='width:63.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:8.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'>Mathematics<o:p></o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:8.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>{{ $report->maths_ca_b[0] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:8.5pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->maths_ca_b[1] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:8.5pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->maths_ca_b[2] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:8.5pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'><span
  style='mso-spacerun:yes'>  </span>{{ $report->maths_ca_b[3] }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:8.5pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->maths_ca_b[0]+$report->maths_ca_b[1]+$report->maths_ca_b[2]+$report->maths_ca_b[3] }}<o:p></o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:8.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'> {{ $report->maths_ca_ex }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:8.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>{{ $report->maths_ca_b[0]+$report->maths_ca_b[1]+$report->maths_ca_b[2]+$report->maths_ca_b[3]+$report->maths_ca_ex }}<o:p></o:p></span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:8.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>{{ grade($report->maths_ca_b[0]+$report->maths_ca_b[1]+$report->maths_ca_b[2]+$report->maths_ca_b[3]+$report->maths_ca_ex) }}
  
  <o:p></o:p></span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:8.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>4<sup>th<o:p></o:p></sup></span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:8.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>100<o:p></o:p></span></b></p>
  </td>
  <td width=42 valign=bottom style='width:31.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:8.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>93<o:p></o:p></span></b></p>
  </td>
  <td width=89 valign=bottom style='width:66.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:8.5pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>{{ remark($report->maths_ca_b[0]+$report->maths_ca_b[1]+$report->maths_ca_b[2]+$report->maths_ca_b[3]+$report->maths_ca_ex) }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:3.25pt'>
  <td width=75 valign=top style='width:56.05pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:3.25pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman","serif";color:#002060'>SUBJECT<o:p></o:p></span></b></p>
  </td>
  <td width=266 colspan=8 valign=top style='width:199.6pt;border-top:none;
  border-left:solid black .5pt;border-bottom:solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right:solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt;
  height:3.25pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Times New Roman","serif";color:#002060'>PERCENTAGE SCORE
  EARNED<o:p></o:p></span></b></p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:none;border-left:solid black .5pt;
  border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:3.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:5.0pt;
  font-family:"Times New Roman","serif";color:#002060'>T#<o:p></o:p></span></b></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:solid black .5pt;
  border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:3.25pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.5in;margin-bottom:.0001pt;text-indent:-.5in;line-height:normal'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:5.0pt;mso-bidi-font-size:
  8.0pt;font-family:"Times New Roman","serif";color:#002060'>T%<o:p></o:p></span></b></p>
  </td>
  <td width=84 valign=bottom style='width:63.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:3.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'>Word
  Building<o:p></o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:3.25pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wd_ca_b[0] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:3.25pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wd_ca_b[1] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:3.25pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wd_ca_b[2] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:3.25pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wd_ca_b[3] }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:3.25pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wd_ca_b[0]+$report->wd_ca_b[1]+$report->wd_ca_b[2]+$report->wd_ca_b[3] }}<o:p></o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:3.25pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wd_ex_b }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:3.25pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wd_ca_b[0]+$report->wd_ca_b[1]+$report->wd_ca_b[2]+$report->wd_ca_b[3]+$report->wd_ex_b }}<o:p></o:p></span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:3.25pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ grade($report->wd_ca_b[0]+$report->wd_ca_b[1]+$report->wd_ca_b[2]+$report->wd_ca_b[3]+$report->wd_ex_b) }}<o:p></o:p></span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:3.25pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>1<sup>st</sup><o:p></o:p></span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:3.25pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>99<o:p></o:p></span></b></p>
  </td>
  <td width=42 valign=bottom style='width:31.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:3.25pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>70<o:p></o:p></span></b></p>
  </td>
  <td width=89 valign=bottom style='width:66.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt;height:3.25pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>{{ remark($report->wd_ca_b[0]+$report->wd_ca_b[1]+$report->wd_ca_b[2]+$report->wd_ca_b[3]+$report->wd_ex_b) }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width=75 valign=top style='width:56.05pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>Mathematics<o:p></o:p></span></b></p>
  </td>
  <td width=19 valign=top style='width:14.15pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif";color:#002060'>#<o:p></o:p></span></b></p>
  </td>
  <td width=31 valign=bottom style='width:23.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->maths_thous_a[0] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->maths_thous_a[1] }}<o:p></o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->maths_thous_a[2] }}<o:p></o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->maths_thous_a[3] }}<o:p></o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=24 valign=bottom style='width:.25in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'>4<o:p></o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=84 valign=bottom style='width:63.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'>Social
  Studies<o:p></o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->ss_10_b[0] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->ss_10_b[1] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->ss_10_b[2] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->ss_10_b[3] }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->ss_10_b[0]+$report->ss_10_b[1]+$report->ss_10_b[2]+$report->ss_10_b[3] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->ss_10_b_exam }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->ss_10_b[0]+$report->ss_10_b[1]+$report->ss_10_b[2]+$report->ss_10_b[3]+$report->ss_10_b_exam }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ grade($report->ss_10_b[0]+$report->ss_10_b[1]+$report->ss_10_b[2]+$report->ss_10_b[3]+$report->ss_10_b_exam) }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=42 valign=bottom style='width:31.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=89 valign=bottom style='width:66.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ remark($report->ss_10_b[0]+$report->ss_10_b[1]+$report->ss_10_b[2]+$report->ss_10_b[3]+$report->ss_10_b_exam) }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6'>
  <td width=75 valign=top style='width:56.05pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=19 valign=top style='width:14.15pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>%</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:5.0pt;mso-bidi-font-size:
  8.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p></o:p></span></b></p>
  </td>
  <td width=31 valign=bottom style='width:23.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->maths_per_a[0] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->maths_per_a[1] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->maths_per_a[2] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->maths_per_a[3] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=24 valign=bottom style='width:.25in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:.5in;margin-bottom:.0001pt;text-align:center;
  text-indent:-.5in;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'>398<o:p></o:p></span></b></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:solid black .5pt;
  border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  font-family:"Times New Roman","serif";color:#002060'>English Studies</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;mso-bidi-font-size:
  8.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p></o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->eng_ca_b[0] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->eng_ca_b[1] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->eng_ca_b[2] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->eng_ca_b[3] }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->eng_ca_b[0]+$report->eng_ca_b[1]+$report->eng_ca_b[2]+$report->eng_ca_b[3] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->eng_ex_b }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->eng_ca_b[0]+$report->eng_ca_b[1]+$report->eng_ca_b[2]+$report->eng_ca_b[3]+$report->eng_ex_b }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ grade($report->eng_ca_b[0]+$report->eng_ca_b[1]+$report->eng_ca_b[2]+$report->eng_ca_b[3]+$report->eng_ex_b) }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=42 valign=bottom style='width:31.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=89 valign=bottom style='width:66.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ remark($report->eng_ca_b[0]+$report->eng_ca_b[1]+$report->eng_ca_b[2]+$report->eng_ca_b[3]+$report->eng_ex_b) }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7'>
  <td width=75 valign=top style='width:56.05pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>Word
  Building<o:p></o:p></span></b></p>
  </td>
  <td width=19 valign=top style='width:14.15pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif";color:#002060'>#<o:p></o:p></span></b></p>
  </td>
  <td width=31 valign=bottom style='width:23.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wb_thous_a[0] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wb_thous_a[1] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wb_thous_a[2] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wb_thous_a[3] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=24 valign=bottom style='width:.25in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'>4<o:p></o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=84 valign=bottom style='width:63.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'>PHE<o:p></o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->pe_ca_b[0] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->pe_ca_b[1] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->pe_ca_b[2] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->pe_ca_b[3] }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->pe_ca_b[0]+$report->pe_ca_b[1]+$report->pe_ca_b[2]+$report->pe_ca_b[3] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'> {{ $report->pe_exam_b }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->pe_ca_b[0]+$report->pe_ca_b[1]+$report->pe_ca_b[2]+$report->pe_ca_b[3]+$report->pe_exam_b }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ grade($report->pe_ca_b[0]+$report->pe_ca_b[1]+$report->pe_ca_b[2]+$report->pe_ca_b[3]+$report->pe_exam_b) }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=42 valign=bottom style='width:31.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=89 valign=bottom style='width:66.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ remark($report->pe_ca_b[0]+$report->pe_ca_b[1]+$report->pe_ca_b[2]+$report->pe_ca_b[3]+$report->pe_exam_b) }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8'>
  <td width=75 valign=top style='width:56.05pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=19 valign=top style='width:14.15pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>%</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:5.0pt;mso-bidi-font-size:
  8.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p></o:p></span></b></p>
  </td>
  <td width=31 valign=bottom style='width:23.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wb_thous_a[0] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wb_thous_a[1] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wb_thous_a[2] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wb_thous_a[3] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=24 valign=bottom style='width:.25in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:.5in;margin-bottom:.0001pt;text-align:center;
  text-indent:-.5in;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;font-family:
  "Times New Roman","serif";color:#002060'>399<o:p></o:p></span></b></p>
  </td>
  <td width=84 valign=bottom style='width:63.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'>Computer<o:p></o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->comp_ca_b[0] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->comp_ca_b[1] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->comp_ca_b[2] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->comp_ca_b[3] }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->comp_ca_b[0]+$report->comp_ca_b[1]+$report->comp_ca_b[2]+$report->comp_ca_b[3] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'> {{ $report->comp_exam_b }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->comp_ca_b[0]+$report->comp_ca_b[1]+$report->comp_ca_b[2]+$report->comp_ca_b[3]+$report->comp_exam_b }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ grade($report->comp_ca_b[0]+$report->comp_ca_b[1]+$report->comp_ca_b[2]+$report->comp_ca_b[3]+$report->comp_exam_b) }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=42 valign=bottom style='width:31.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=89 valign=bottom style='width:66.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ remark($report->comp_ca_b[0]+$report->comp_ca_b[1]+$report->comp_ca_b[2]+$report->comp_ca_b[3]+$report->comp_exam_b) }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9'>
  <td width=75 valign=top style='width:56.05pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>Word
  Building<o:p></o:p></span></b></p>
  </td>
  <td width=19 valign=top style='width:14.15pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif";color:#002060'>#<o:p></o:p></span></b></p>
  </td>
  <td width=31 valign=bottom style='width:23.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wb_per_a[0] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wb_per_a[1] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wb_per_a[2] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wb_per_a[3] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=24 valign=bottom style='width:.25in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'>4<o:p></o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=84 valign=bottom style='width:63.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'>Lit.
  &amp;Cre. Writ.<o:p></o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->lcw_ca_b[0] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->lcw_ca_b[1] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->lcw_ca_b[2] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->lcw_ca_b[3] }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->lcw_ca_b[0]+$report->lcw_ca_b[1]+$report->lcw_ca_b[2]+$report->lcw_ca_b[3] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'> {{ $report->lcw_exam_b }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->lcw_ca_b[0]+$report->lcw_ca_b[1]+$report->lcw_ca_b[2]+$report->lcw_ca_b[3]+$report->lcw_exam_b }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ grade($report->lcw_ca_b[0]+$report->lcw_ca_b[1]+$report->lcw_ca_b[2]+$report->lcw_ca_b[3]+$report->lcw_exam_b) }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=42 valign=bottom style='width:31.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=89 valign=bottom style='width:66.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ grade($report->lcw_ca_b[0]+$report->lcw_ca_b[1]+$report->lcw_ca_b[2]+$report->lcw_ca_b[3]+$report->lcw_exam_b) }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10'>
  <td width=75 valign=top style='width:56.05pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=19 valign=top style='width:14.15pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>%</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:5.0pt;mso-bidi-font-size:
  8.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p></o:p></span></b></p>
  </td>
  <td width=31 valign=bottom style='width:23.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wb_per_a[0] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wb_per_a[1] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wb_per_a[2] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->wb_per_a[3] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=24 valign=bottom style='width:.25in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;font-family:
  "Times New Roman","serif";color:#002060'>400<o:p></o:p></span></b></p>
  </td>
  <td width=84 valign=bottom style='width:63.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'>Penmanship<o:p></o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->pen_ca_b[0] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->pen_ca_b[1] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->pen_ca_b[2] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->pen_ca_b[3] }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->pen_ca_b[0]+$report->pen_ca_b[1]+$report->pen_ca_b[2]+$report->pen_ca_b[3] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'> {{ $report->pen_exam_b }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->pen_ca_b[0]+$report->pen_ca_b[1]+$report->pen_ca_b[2]+$report->pen_ca_b[3]+$report->pen_exam_b }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ grade($report->pen_ca_b[0]+$report->pen_ca_b[1]+$report->pen_ca_b[2]+$report->pen_ca_b[3]+$report->pen_exam_b) }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=42 valign=bottom style='width:31.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=89 valign=bottom style='width:66.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>{{ remark($report->pen_ca_b[0]+$report->pen_ca_b[1]+$report->pen_ca_b[2]+$report->pen_ca_b[3]+$report->pen_exam_b) }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11'>
  <td width=75 valign=top style='width:56.05pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>Adv.
  Lesson<o:p></o:p></span></b></p>
  </td>
  <td width=19 valign=top style='width:14.15pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif";color:#002060'>#<o:p></o:p></span></b></p>
  </td>
  <td width=31 valign=bottom style='width:23.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->adl_thous_a[0] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->adl_thous_a[1] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->adl_thous_a[2] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->adl_thous_a[3] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=24 valign=bottom style='width:.25in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:.5in;margin-bottom:.0001pt;text-align:center;
  text-indent:-.5in;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=84 valign=bottom style='width:63.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'>Science<o:p></o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->sc_ca_b[0] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->sc_ca_b[1] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->sc_ca_b[2] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->sc_ca_b[3] }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->sc_ca_b[0]+$report->sc_ca_b[1]+$report->sc_ca_b[2]+$report->sc_ca_b[3] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'> {{ $report->sc_exam_b }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->sc_ca_b[0]+$report->sc_ca_b[1]+$report->sc_ca_b[2]+$report->sc_ca_b[3]+$report->sc_exam_b }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ grade($report->sc_ca_b[0]+$report->sc_ca_b[1]+$report->sc_ca_b[2]+$report->sc_ca_b[3]+$report->sc_exam_b) }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=42 valign=bottom style='width:31.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=89 valign=bottom style='width:66.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ remark($report->sc_ca_b[0]+$report->sc_ca_b[1]+$report->sc_ca_b[2]+$report->sc_ca_b[3]+$report->sc_exam_b) }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12'>
  <td width=75 valign=top style='width:56.05pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=19 valign=top style='width:14.15pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>%</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:5.0pt;mso-bidi-font-size:
  8.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p></o:p></span></b></p>
  </td>
  <td width=31 valign=bottom style='width:23.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->adl_per_a[0] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->adl_per_a[1] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->adl_per_a[2] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->adl_per_a[3] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p> </span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=24 valign=bottom style='width:.25in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:solid black .5pt;
  border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  font-family:"Times New Roman","serif";color:#002060'>Lit. &amp;Debating</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;mso-bidi-font-size:
  8.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p></o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->ld_ca_b[0] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->ld_ca_b[1] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->ld_ca_b[2] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->ld_ca_b[3] }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->ld_ca_b[0]+$report->ld_ca_b[1]+$report->ld_ca_b[2]+$report->ld_ca_b[3] }}<o:p></o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'> {{ $report->ld_exam_b }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->ld_ca_b[0]+$report->ld_ca_b[1]+$report->ld_ca_b[2]+$report->ld_ca_b[3]+$report->ld_exam_b }}<o:p></o:p></span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ grade($report->ld_ca_b[0]+$report->ld_ca_b[1]+$report->ld_ca_b[2]+$report->ld_ca_b[3]+$report->ld_exam_b) }}<o:p></o:p></span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>5<sup>th</sup><o:p></o:p></span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>100<o:p></o:p></span></b></p>
  </td>
  <td width=42 valign=bottom style='width:31.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>77<o:p></o:p></span></b></p>
  </td>
  <td width=89 valign=bottom style='width:66.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ remark($report->ld_ca_b[0]+$report->ld_ca_b[1]+$report->ld_ca_b[2]+$report->ld_ca_b[3]+$report->ld_exam_b) }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13'>
  <td width=75 valign=top style='width:56.05pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>Penmanship<o:p></o:p></span></b></p>
  </td>
  <td width=19 valign=top style='width:14.15pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif";color:#002060'>#<o:p></o:p></span></b></p>
  </td>
  <td width=31 valign=bottom style='width:23.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->pen_thous_a[0] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->pen_thous_a[1] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->pen_thous_a[2] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->pen_thous_a[3] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=24 valign=bottom style='width:.25in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:.5in;margin-bottom:.0001pt;text-align:center;
  text-indent:-.5in;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=84 valign=bottom style='width:63.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'>JETS<o:p></o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->jet_ca_b[0] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->jet_ca_b[1] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->jet_ca_b[2] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->jet_ca_b[3] }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->jet_ca_b[0]+$report->jet_ca_b[1]+$report->jet_ca_b[2]+$report->jet_ca_b[3] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'> {{ $report->jet_exam_b }} </span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->jet_ca_b[0]+$report->jet_ca_b[1]+$report->jet_ca_b[2]+$report->jet_ca_b[3]+$report->jet_exam_b }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ grade($report->jet_ca_b[0]+$report->jet_ca_b[1]+$report->jet_ca_b[2]+$report->jet_ca_b[3]+$report->jet_exam_b) }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=42 valign=bottom style='width:31.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=89 valign=bottom style='width:66.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ remark($report->jet_ca_b[0]+$report->jet_ca_b[1]+$report->jet_ca_b[2]+$report->jet_ca_b[3]+$report->jet_exam_b) }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14'>
  <td width=75 valign=top style='width:56.05pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=19 valign=top style='width:14.15pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>%</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:5.0pt;mso-bidi-font-size:
  8.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p></o:p></span></b></p>
  </td>
  <td width=31 valign=bottom style='width:23.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=24 valign=bottom style='width:.25in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=84 valign=bottom style='width:63.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'>Home
  Makers<o:p></o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->hm_ca_b[0] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->hm_ca_b[1] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->hm_ca_b[2] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->hm_ca_b[3] }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->hm_ca_b[0]+$report->hm_ca_b[1]+$report->hm_ca_b[2]+$report->hm_ca_b[3] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'> {{ $report->hm_exam_b }} </span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->hm_ca_b[0]+$report->hm_ca_b[1]+$report->hm_ca_b[2]+$report->hm_ca_b[3]+$report->hm_exam_b }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ grade($report->hm_ca_b[0]+$report->hm_ca_b[1]+$report->hm_ca_b[2]+$report->hm_ca_b[3]+$report->hm_exam_b) }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=42 valign=bottom style='width:31.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=89 valign=bottom style='width:66.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ remark($report->hm_ca_b[0]+$report->hm_ca_b[1]+$report->hm_ca_b[2]+$report->hm_ca_b[3]+$report->hm_exam_b) }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15'>
  <td width=75 valign=top style='width:56.05pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=19 valign=top style='width:14.15pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif";color:#002060'>#</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;mso-bidi-font-size:
  8.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p></o:p></span></b></p>
  </td>
  <td width=31 valign=bottom style='width:23.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=24 valign=bottom style='width:.25in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=84 valign=bottom style='width:63.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'>Music
  &amp; art<o:p></o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->ma_ca_b[0] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->ma_ca_b[1] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->ma_ca_b[2] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->ma_ca_b[3] }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->ma_ca_b[0]+$report->ma_ca_b[1]+$report->ma_ca_b[2]+$report->ma_ca_b[3] }}</span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'> {{ $report->ma_exam_b }} </span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->ma_ca_b[0]+$report->ma_ca_b[1]+$report->ma_ca_b[2]+$report->ma_ca_b[3]+$report->ma_exam_b }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ grade($report->ma_ca_b[0]+$report->ma_ca_b[1]+$report->ma_ca_b[2]+$report->ma_ca_b[3]+$report->ma_exam_b) }}</span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=48 valign=bottom style='width:.5in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=42 valign=bottom style='width:31.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=89 valign=bottom style='width:66.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ remark($report->ma_ca_b[0]+$report->ma_ca_b[1]+$report->ma_ca_b[2]+$report->ma_ca_b[3]+$report->ma_exam_b) }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16'>
  <td width=75 valign=top style='width:56.05pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=19 valign=top style='width:14.15pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>%<o:p></o:p></span></b></p>
  </td>
  <td width=31 valign=bottom style='width:23.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=24 valign=bottom style='width:.25in;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=84 valign=bottom style='width:63.0pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'>Cercle
  Francais<o:p></o:p></span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->cf_ca_b[0] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->cf_ca_b[1] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->cf_ca_b[2] }}</span></b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->cf_ca_b[3] }}</span></b></p>
  </td>
<td width=37 valign=bottom style='width:27.65pt;border-top:none;border-left:
  none;border-bottom: solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right: solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->cf_ca_b[0]+$report->cf_ca_b[1]+$report->cf_ca_b[2]+$report->cf_ca_b[3] }}</span></b><span style='font-size:
  8.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p></o:p></span></p>
  </td>
  <td width=110 valign=bottom style='width:1.15in;border-top:none;border-left:
  none;border-bottom: solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right: solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->cf_exam_b }}</span></b><span style='font-size:
  8.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p></o:p></span></p>
  </td>
  <td width=42 valign=bottom style='width:31.4pt;border-top:none;border-left:
  none;border-bottom: solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right: solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->cf_ca_b[0]+$report->cf_ca_b[1]+$report->cf_ca_b[2]+$report->cf_ca_b[3]+$report->cf_exam_b }}</span></b></p>
  </td>
  <td width=41 valign=bottom style='width:30.45pt;border-top:none;border-left:
  none;border-bottom: solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right: solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ grade($report->cf_ca_b[0]+$report->cf_ca_b[1]+$report->cf_ca_b[2]+$report->cf_ca_b[3]+$report->cf_exam_b) }}</span></b></p>
  </td>
  <td width=46 valign=bottom style='width:34.2pt;border-top:none;border-left:
  none;border-bottom: solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right: solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=43 valign=bottom style='width:32.35pt;border-top:none;border-left:
  none;border-bottom: solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right: solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=41 valign=bottom style='width:30.45pt;border-top:none;border-left:
  none;border-bottom: solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right: solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=110 valign=bottom style='width:1.15in;border-top:none;border-left:
  none;border-bottom: solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right: solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ remark($report->cf_ca_b[0]+$report->cf_ca_b[1]+$report->cf_ca_b[2]+$report->cf_ca_b[3]+$report->cf_exam_b) }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17'>
  <td width=781 colspan=9 valign=top style='width:585.9pt;border: solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='float:left'><span style='font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'>GRAND TOTAL OF PERCENTAGES EARNED: </span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p></o:p></span></b></p>
  </td>
  <td width=51 colspan=2 valign=top style='width:38.1pt;border-top:none;
  border-left:solid black .5pt;border-bottom: solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right: solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'></span>1,197</span></span></b><b
  style='mso-bidi-font-weight:normal'><span style='float:right'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p></o:p></span></b></p>
  </td>
  <td width=661 colspan=7 valign=top style='width:495.5pt;border-top:none;
  border-left:solid black .5pt;border-bottom: solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right: solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>GRAND
  TOTAL:</span></b><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p></o:p></span></b></p>
  </td>
  <td width=42 valign=bottom style='width:31.4pt;border-top:none;border-left:
  none;border-bottom: solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right: solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=right style='text-align:right'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Times New Roman","serif";color:#002060'>287.7<o:p></o:p></span></b></p>
  </td>
  <td width=280 colspan=5 rowspan=6 valign=top style='width:210.25pt;
  border-top:none;border-left:solid black .5pt;border-bottom: solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right: solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><u><span
  style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif";
  color:#002060'>SUPERVISOR S COMMENT:<o:p></o:p></span></u></b></p>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;font-family:
  "Times New Roman","serif";color:#002060'>{{ $report->supervisor_c }}</span></b></p>
  <p class=MsoNoSpacing align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18'>
  <td width=781 colspan=9 valign=top style='width:585.5pt;border: solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>OUT
  OF: </span></b><b style='mso-bidi-font-weight:normal'><span style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p></o:p></span></b></p>
  </td>
  <td width=51 colspan=3 valign=top style='width:38.5pt;border-top:none;
  border-left:solid black .5pt;border-bottom: solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right: solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>1200</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p></o:p></span></b></p>
  </td>
  <td width=661 colspan=7 valign=top style='width:495.5pt;border-top:none;
  border-left:solid black .5pt;border-bottom: solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right: solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>OUT
  OF:</span></b><b style='mso-bidi-font-weight:normal'><span style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p></o:p></span></b></p>
  </td>
  <td width=42 valign=bottom style='width:31.4pt;border-top:none;border-left:
  none;border-bottom: solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right: solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=right style='text-align:right'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Times New Roman","serif";color:#002060'>300<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19'>
  <td width=781 colspan=9 valign=top style='width:585.5pt;border: solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>TOTAL PACEs COMPLETED:<o:p></o:p></span></b></p>
  </td>
  <td width=51 colspan=3 valign=top style='width:38.5pt;border-top:none;
  border-left:solid black .5pt;border-bottom: solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right: solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman","serif";
  color:#002060'>12<o:p></o:p></span></b></p>
  </td>
  <td width=661 colspan=7 valign=top style='width:495.5pt;border-top:none;
  border-left:solid black .5pt;border-bottom: solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right: solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>TOTAL
  SUBJECTS ENTERED:</span></b><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p></o:p></span></b></p>
  </td>
  <td width=42 valign=bottom style='width:31.4pt;border-top:none;border-left:
  none;border-bottom: solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right: solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=right style='text-align:right'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Times New Roman","serif";color:#002060'>3<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:20'>
  <td width=781 colspan=9 valign=top style='width:585.5pt;border: solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>PACE AVERAGE &amp; GRADE<span
  style='mso-tab-count:1'>                </span>:<span style='mso-tab-count:
  1'>               </span> (A )<o:p></o:p></span></b></p>
  </td>
  <td width=51 colspan=3 valign=top style='width:38.5pt;border-top:none;
  border-left:solid black .5pt;border-bottom: solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right: solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman","serif";
  color:#002060'>99.75<o:p></o:p></span></b></p>
  </td>
  <td width=661 colspan=7 valign=top style='width:495.5pt;border-top:none;
  border-left:solid black .5pt;border-bottom: solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right: solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'>AVERAGE
  SCORE (%):</span></b><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p></o:p></span></b></p>
  </td>
  <td width=42 valign=bottom style='width:31.4pt;border-top:none;border-left:
  none;border-bottom: solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right: solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=right style='text-align:right'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Times New Roman","serif";color:#002060'>95.90<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:21'>
  <td width=781 colspan=9 valign=top style='width:585.5pt;border: solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>READING; WORD PER MINUTE
  (wpm) :<o:p></o:p></span></b></p>
  </td>
  <td width=51 colspan=3 valign=top style='width:38.5pt;border-top:none;
  border-left:solid black .5pt;border-bottom: solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right: solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=661 colspan=7 valign=top style='width:495.5pt;border-top:none;
  border-left:solid black .5pt;border-bottom: solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right: solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman","serif";
  color:#002060'>OVERALL GRADE:<o:p></o:p></span></b></p>
  </td>
  <td width=42 valign=bottom style='width:31.4pt;border-top:none;border-left:
  none;border-bottom: solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right: solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing align=right style='text-align:right'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Times New Roman","serif";color:#002060'>A<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:22;mso-yfti-lastrow:yes'>
  <td width=781 colspan=9 valign=top style='width:585.5pt;border: solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'>% of WPM:<o:p></o:p></span></b></p>
  </td>
  <td width=51 colspan=3 valign=top style='width:38.5pt;border-top:none;
  border-left:solid black .5pt;border-bottom: solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right: solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=703 colspan=8 valign=top style='width:526.9pt;border-top:none;
  border-left:solid black .5pt;border-bottom: solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right: solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=69 style='border:none'></td>
  <td width=23 style='border:none'></td>
  <td width=160 style='border:none'></td>
  <td width=160 style='border:none'></td>
  <td width=160 style='border:none'></td>
  <td width=160 style='border:none'></td>
  <td width=15 style='border:none'></td>
  <td width=15 style='border:none'></td>
  <td width=14 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=23 style='border:none'></td>
  <td width=29 style='border:none'></td>
  <td width=15 style='border:none'></td>
  <td width=69 style='border:none'></td>
  <td width=110 style='border:none'></td>
  <td width=110 style='border:none'></td>
  <td width=110 style='border:none'></td>
  <td width=110 style='border:none'></td>
  <td width=40 style='border:none'></td>
  <td width=110 style='border:none'></td>
  <td width=41 style='border:none'></td>
  <td width=44 style='border:none'></td>
  <td width=45 style='border:none'></td>
  <td width=43 style='border:none'></td>
  <td width=42 style='border:none'></td>
  <td width=110 style='border:none'></td>
 </tr>
 <![endif]>
</table>

</div>

<p class=MsoNoSpacing align=center style='text-align:center'><b
style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
10.0pt;font-family:"Times New Roman","serif";color:red'>RATING SCALE:</span></b><b
style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
10.0pt;font-family:"Times New Roman","serif";color:red'><span style='mso-tab-count:
1'>   </span></span></b><b style='mso-bidi-font-weight:normal'><span
style='font-size:6.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman","serif";
color:#00B050'>A= 91   100 = EXCELLENT; <span style='mso-tab-count:2'>                                             </span>B<span
style='mso-spacerun:yes'>  </span>=<span style='mso-spacerun:yes'>  </span>80  
90<span style='mso-spacerun:yes'>    </span>= VERY GOOD;<span style='mso-tab-count:
2'>                                          </span>C = 70   79<span
style='mso-spacerun:yes'>     </span>= GOOD</span></b><b style='mso-bidi-font-weight:
normal'><span style='font-size:4.0pt;mso-bidi-font-size:10.0pt;font-family:
"Times New Roman","serif";color:red'><o:p></o:p></span></b></p>

<div align=center>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='width:777.3pt;margin:0 auto;border-collapse:collapse;border:none;mso-border-alt:
 solid black .5pt;mso-border-themecolor:text1;mso-yfti-tbllook:480;mso-padding-alt:
 0in 5.4pt 0in 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=418 colspan=6 valign=top style='width:313.15pt;border:solid black .5pt;
  mso-border-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif";color:red'>SECTION
  C: <span style='mso-spacerun:yes'>      </span>WORK HABITS AND SOCIAL TRAITS<o:p></o:p></span></b></p>
  </td>
  <td width=179 rowspan=18 valign=top style='width:134.55pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-left:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><u><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif";color:red'>HEAD
  TEACHER S REMARKS:</span></u></b><b style='mso-bidi-font-weight:normal'><u><span
  style='font-size:7.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif";
  color:red'><o:p></o:p></span></u></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:6.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  color:#002060'>{{ $report->head_teacher_c }}<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:7.0pt;mso-bidi-font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:7.0pt;mso-bidi-font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:7.0pt;mso-bidi-font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:7.0pt;mso-bidi-font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:7.0pt;mso-bidi-font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>SIGN ____________________________<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:7.0pt;mso-bidi-font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:7.0pt;mso-bidi-font-size:8.0pt;font-family:
  "Times New Roman","serif";color:#002060'>DATE____________________________</span><span
  style='font-size:6.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p></o:p></span></p>
  </td>
  <td width=432 colspan=6 valign=top style='width:324.1pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-left:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif";color:red'>SECTION
  D: BEHAVIOURAL TRAIT/ AFFECTIVE DEVELOPMENT<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=227 valign=top style='width:170.2pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'>A<o:p></o:p></span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'>B<o:p></o:p></span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'>C<o:p></o:p></span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'>D<o:p></o:p></span></b></p>
  </td>
  <td width=39 valign=bottom style='width:29.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'>E<o:p></o:p></span></b></p>
  </td>
  <td width=168 valign=top style='width:125.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;
  mso-bidi-font-size:7.0pt;font-family:"Times New Roman","serif";color:#002060'>BEHAVIOURAL
  TRAITS<o:p></o:p></span></b></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'>A<o:p></o:p></span></b></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'>B<o:p></o:p></span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'>C<o:p></o:p></span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'>D<o:p></o:p></span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'>E<o:p></o:p></span></b></p>
  </td>
 </tr>
 
 <tr style='mso-yfti-irow:2'>
  <td width=227 valign=top style='width:170.2pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>FOLLOWS DIRECTIONS<o:p></o:p></span></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'>{{ $report->fd_grad_c[0] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'>{{ $report->fd_grad_c[1] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'>{{ $report->fd_grad_c[2] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'>{{ $report->fd_grad_c[3] }}</span></b></p>
  </td>
  <td width=39 valign=bottom style='width:29.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif"'>{{ $report->fd_grad_c[4] }}</span></b></p>
  </td>
  <td width=168 valign=top style='width:125.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>NEATNESS<o:p></o:p></span></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'>{{ $report->nt_grad_c[0] }}</span></b></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'>{{ $report->nt_grad_c[1] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'>{{ $report->nt_grad_c[2] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'>{{ $report->nt_grad_c[3] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'>{{ $report->nt_grad_c[4] }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width=227 valign=top style='width:170.2pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>WORKS INDEPENDENTLY<o:p></o:p></span></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->wi_grad_c[0] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->wi_grad_c[1] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->wi_grad_c[2] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->wi_grad_c[3] }}</span></b></p>
  </td>
  <td width=39 valign=bottom style='width:29.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif"'> {{ $report->wi_grad_c[4] }}</b></p>
  </td>
  <td width=168 valign=top style='width:125.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>PUNCTUALITY<o:p></o:p></span></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->punc_grad_c[0] }}</span></b></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->punc_grad_c[1] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->punc_grad_c[2] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->punc_grad_c[3] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->punc_grad_c[4] }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width=227 valign=top style='width:170.2pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>DOES NOT DISTURB OTHERS<o:p></o:p></span></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->dndo_grad_c[0] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->dndo_grad_c[1] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->dndo_grad_c[2] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->dndo_grad_c[3] }}</span></b></p>
  </td>
  <td width=39 valign=bottom style='width:29.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif"'> {{ $report->dndo_grad_c[4] }}</span></b></p>
  </td>
  <td width=168 valign=top style='width:125.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>FLEXIBILITY<o:p></o:p></span></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->flx_grad_c[0] }}</span></b></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->flx_grad_c[1] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->flx_grad_c[2] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->flx_grad_c[3] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->flx_grad_c[4] }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width=227 valign=top style='width:170.2pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>TAKES CARE OF MATERIALS<o:p></o:p></span></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->tcom_grad_c[0] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->tcom_grad_c[1] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->tcom_grad_c[2] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->tcom_grad_c[3] }}</span></b></p>
  </td>
  <td width=39 valign=bottom style='width:29.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif"'> {{ $report->tcom_grad_c[4] }}</span></b></p>
  </td>
  <td width=168 valign=top style='width:125.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>CREATIVITY<o:p></o:p></span></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->crea_grad_c[0] }}</span></b></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->crea_grad_c[1] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->crea_grad_c[2] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->crea_grad_c[3] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->crea_grad_c[4] }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6'>
  <td width=227 valign=top style='width:170.2pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>COMPLETES WORK REQUIRED<o:p></o:p></span></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->cwr_grad_c[0] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->cwr_grad_c[1] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->cwr_grad_c[2] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->cwr_grad_c[3] }}</span></b></p>
  </td>
  <td width=39 valign=bottom style='width:29.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif"'> {{ $report->cwr_grad_c[4] }}</span></b></p>
  </td>
  <td width=168 valign=top style='width:125.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>GOAL ORIENTED<o:p></o:p></span></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->go_grad_c[0] }}</span></b></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->go_grad_c[1] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->go_grad_c[2] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->go_grad_c[3] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->go_grad_c[4] }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7'>
  <td width=227 valign=top style='width:170.2pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>ACHIVES REQUIRED
  ASSIGNMENTS<o:p></o:p></span></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->ara_grad_c[0] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->ara_grad_c[1] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->ara_grad_c[2] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->ara_grad_c[3] }}</span></b></p>
  </td>
  <td width=39 valign=bottom style='width:29.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif"'> {{ $report->ara_grad_c[4] }}</span></b></p>
  </td>
  <td width=168 valign=top style='width:125.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>POLITENESS<o:p></o:p></span></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->polit_grad_c[0] }}</span></b></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->polit_grad_c[1] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->polit_grad_c[2] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->polit_grad_c[3] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->polit_grad_c[4] }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8'>
  <td width=227 valign=top style='width:170.2pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>IS COURTEOUS<o:p></o:p></span></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->ic_grad_c[0] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->ic_grad_c[1] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->ic_grad_c[2] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->ic_grad_c[3] }}</span></b></p>
  </td>
  <td width=39 valign=bottom style='width:29.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif"'> {{ $report->ic_grad_c[4] }}</span></b></p>
  </td>
  <td width=168 valign=top style='width:125.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>GAMES &amp; SPORTS<o:p></o:p></span></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->gs_grad_c[0] }}</span></b></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->gs_grad_c[1] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->gs_grad_c[2] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->gs_grad_c[3] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->gs_grad_c[4] }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9'>
  <td width=227 valign=top style='width:170.2pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>GETS ALONG WELL WITH
  OTHERS<o:p></o:p></span></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->gawo_grad_c[0] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->gawo_grad_c[1] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->gawo_grad_c[2] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->gawo_grad_c[3] }}</span></b></p>
  </td>
  <td width=39 valign=bottom style='width:29.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif"'> {{ $report->gawo_grad_c[4] }}</span></b></p>
  </td>
  <td width=168 valign=top style='width:125.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>HOSPITALITY<o:p></o:p></span></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->h_grad_c[0] }}</span></b></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->h_grad_c[1] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->h_grad_c[2] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->h_grad_c[3] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->h_grad_c[4] }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10'>
  <td width=227 valign=top style='width:170.2pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>EXHIBITS SELF CONTROL<o:p></o:p></span></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->esc_grad_c[0] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->esc_grad_c[1] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->esc_grad_c[2] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->esc_grad_c[3] }}</span></b></p>
  </td>
  <td width=39 valign=bottom style='width:29.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif"'> {{ $report->esc_grad_c[4] }}</span></b></p>
  </td>
  <td width=168 valign=top style='width:125.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>SELF CONTROL<o:p></o:p></span></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->sc_grad_c[0] }}</span></b></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->sc_grad_c[1] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->sc_grad_c[2] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->sc_grad_c[3] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->sc_grad_c[4] }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11'>
  <td width=227 valign=top style='width:170.2pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>SHOWS RESPECT FOR
  AUTHORITY<o:p></o:p></span></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->srfa_grad_c[0] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->srfa_grad_c[1] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->srfa_grad_c[2] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->srfa_grad_c[3] }}</span></b></p>
  </td>
  <td width=39 valign=bottom style='width:29.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif"'> {{ $report->srfa_grad_c[4] }}</span></b></p>
  </td>
  <td width=168 valign=top style='width:125.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>GENEROUSITY<o:p></o:p></span></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->gene_grad_c[0] }}</span></b></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->gene_grad_c[1] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->gene_grad_c[2] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->gene_grad_c[3] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->gene_grad_c[4] }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12'>
  <td width=227 valign=top style='width:170.2pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>RESPONDS WELL TO
  CORRECTIONS<o:p></o:p></span></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->rwtc_grad_c[0] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->rwtc_grad_c[1] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->rwtc_grad_c[2] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->rwtc_grad_c[3] }}</span></b></p>
  </td>
  <td width=39 valign=bottom style='width:29.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif"'> {{ $report->rwtc_grad_c[4] }}</span></b></p>
  </td>
  <td width=168 valign=top style='width:125.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>RELIABILITY<o:p></o:p></span></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->relia_grad_c[0] }}</span></b></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->relia_grad_c[1] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->relia_grad_c[2] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->relia_grad_c[3] }}</span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'> {{ $report->relia_grad_c[4] }}</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13'>
  <td width=227 valign=top style='width:170.2pt;border:solid black .5pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'>PROMOTES SCHOOL SPIRIT<o:p></o:p></span></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->pss_grad_c[0] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->pss_grad_c[1] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->pss_grad_c[2] }}</span></b></p>
  </td>
  <td width=38 valign=bottom style='width:28.35pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'> {{ $report->pss_grad_c[3] }}</span></b></p>
  </td>
  <td width=39 valign=bottom style='width:29.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif"'> {{ $report->pss_grad_c[4] }}</span></b></p>
  </td>
  <td width=168 valign=top style='width:125.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>

 <tr style='mso-yfti-irow:14'>
  <td width=418 colspan=6 rowspan=4 valign=top style='width:313.15pt;
  border:solid black .5pt;mso-border-themecolor:text1;border-top:none;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing style='margin-left:.5in;text-indent:-.5in'><span
  lang=FR style='font-size:6.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif";
  color:red;mso-ansi-language:FR'>A: EXCELLENT<span
  style='mso-spacerun:yes'>                    </span><o:p></o:p></span></p>
  <p class=MsoNoSpacing><span lang=FR style='font-size:6.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman","serif";color:red;mso-ansi-language:
  FR'>B: VERY GOOD <o:p></o:p></span></p>
  <p class=MsoNoSpacing><span lang=FR style='font-size:6.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman","serif";color:red;mso-ansi-language:
  FR'>C: GOOD <span style='mso-tab-count:1'>       </span><o:p></o:p></span></p>
  <p class=MsoNoSpacing><span lang=FR style='font-size:6.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman","serif";color:red;mso-ansi-language:
  FR'>D: SATISFACTORY<span style='mso-tab-count:1'>              </span><o:p></o:p></span></p>
  <p class=MsoNoSpacing><span lang=FR style='font-size:6.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman","serif";color:red;mso-ansi-language:
  FR'>E: NEEDS IMPROVEMENT<o:p></o:p></span></p>
  </td>
  <td width=168 valign=top style='width:125.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:7.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=47 valign=top style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15'>
  <td width=168 valign=top style='width:125.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16'>
  <td width=168 valign=top style='width:125.65pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNoSpacing><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman","serif";color:#002060'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=47 valign=bottom style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.55pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=57 valign=bottom style='width:42.5pt;border-top:none;border-left:
  none;border-bottom:solid black .5pt;mso-border-bottom-themecolor:text1;
  border-right:solid black .5pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman","serif";
  color:#002060'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;mso-yfti-lastrow:yes;height:5.0pt'>
  <td width=432 colspan=6 valign=bottom style='width:324.1pt;border-top:none;
  border-left:solid black .5pt;border-bottom:solid black .5pt;mso-border-bottom-themecolor:
  text1;border-right:solid black .5pt;mso-border-right-themecolor:text1;
  mso-border-top-alt:solid black .5pt;mso-border-top-themecolor:text1;
  mso-border-left-alt:solid black .5pt;mso-border-left-themecolor:text1;
  mso-border-alt:solid black .5pt;mso-border-themecolor:text1;padding:0in 5.4pt 0in 5.4pt;
  height:5.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='font-size:9.0pt;font-family:
  "Times New Roman","serif";color:red'>The Highest Scale is 5 and the Lowest is
  1</span></i></b><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman","serif";color:red'><o:p></o:p></span></b></p>
  </td>
 </tr>
</table>
{{-- <input type="submit"submit">
</form> --}}
</div>

</div>

<span style='font-size:11.0pt;line-height:107%;font-family:"Calibri","sans-serif";
mso-ascii-theme-font:minor-latin;mso-fareast-font-family:Calibri;mso-fareast-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;
mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:auto;
mso-break-type:section-break'>
</span>

<div class=Section3></div>

<span style='font-size:11.0pt;line-height:107%;font-family:"Calibri","sans-serif";
mso-ascii-theme-font:minor-latin;mso-fareast-font-family:Calibri;mso-fareast-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;
mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>

<div class=Section4>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

</div>

</body>

</html>

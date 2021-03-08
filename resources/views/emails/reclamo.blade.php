<!doctype html>
<!--Quite a few clients strip your Doctype out, and some even apply their own. Many clients do honor your doctype and it can make things much easier if you can validate constantly against a Doctype.-->
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Email template By Adobe Dreamweaver CC</title>

<!-- Please use an inliner tool to convert all CSS to inline as inpage or external CSS is removed by email clients -->
<!-- important in CSS is used to prevent the styles of currently inline CSS from overriding the ones mentioned in media queries when corresponding screen sizes are encountered -->

<style type="text/css">
body {
	margin: 0;
}
body, table, td, p, a, li, blockquote {
	-webkit-text-size-adjust: none!important;
	font-family: sans-serif;
	font-style: normal;
	font-weight: 400;
}
button {
	width: 90%;
}

@media screen and (max-width:600px) {
/*styling for objects with screen size less than 600px; */
body, table, td, p, a, li, blockquote {
	-webkit-text-size-adjust: none!important;
	font-family: sans-serif;
}
table {
	/* All tables are 100% width */
	width: 100%;
}
.footer {
	/* Footer has 2 columns each of 48% width */
	height: auto !important;
	max-width: 48% !important;
	width: 48% !important;
}
table.responsiveImage {
	/* Container for images in catalog */
	height: auto !important;
	max-width: 30% !important;
	width: 30% !important;
}
table.responsiveContent {
	/* Content that accompanies the content in the catalog */
	height: auto !important;
	max-width: 66% !important;
	width: 66% !important;
}
.top {
	/* Each Columnar table in the header */
	height: auto !important;
	max-width: 48% !important;
	width: 48% !important;
}
.catalog {
	margin-left: 0%!important;
}
}

@media screen and (max-width:480px) {
/*styling for objects with screen size less than 480px; */
body, table, td, p, a, li, blockquote {
	-webkit-text-size-adjust: none!important;
	font-family: sans-serif;
}
table {
	/* All tables are 100% width */
	width: 100% !important;
	border-style: none !important;
}
.footer {
	/* Each footer column in this case should occupy 96% width  and 4% is allowed for email client padding*/
	height: auto !important;
	max-width: 96% !important;
	width: 96% !important;
}
.table.responsiveImage {
	/* Container for each image now specifying full width */
	height: auto !important;
	max-width: 96% !important;
	width: 96% !important;
}
.table.responsiveContent {
	/* Content in catalog  occupying full width of cell */
	height: auto !important;
	max-width: 96% !important;
	width: 96% !important;
}
.top {
	/* Header columns occupying full width */
	height: auto !important;
	max-width: 100% !important;
	width: 100% !important;
}
.catalog {
	margin-left: 0%!important;
}
button {
	width: 90%!important;
}
}
</style>
</head>
<body yahoo="yahoo">
<table width="100%"  cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td><table width="600"  align="center" cellpadding="0" cellspacing="0">
          <!-- Main Wrapper Table with initial width set to 60opx -->
          <tbody>
            <tr>
              <!-- HTML Spacer row -->
              <td style="font-size: 0; line-height: 0;" height="20"><table width="96%" align="left"  cellpadding="0" cellspacing="0">
                  <tr>

                  </tr>
                  <tr>
                    <td style="font-size: 0; line-height: 0;" height="20">&nbsp;</td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <!-- Introduction area -->
              <td><table width="96%"  align="left" cellpadding="0" cellspacing="0">
                  <tr>
                    <!-- row container for TITLE/EMAIL THEME -->
                    <td align="center" style="font-size: 32px; font-weight: 300; line-height: 2.5em; color: #000; font-family: sans-serif;">Hola {{$nombre}}</td>
                  </tr>
                  <tr>
                    <!-- row container for Tagline -->
                    <td align="center" style="font-family: sans-serif;"><p style="margin: 0; padding: 0; color: #000000; font-weight: bold; font-size: 20px; line-height: 28px;">A continuación te enviamos el resultado de<br>
                    tu evaluación médica en #YoMeVacuno</p></td>
                  </tr>
                  <tr>
                    <td style="font-size: 0; line-height: 0;" height="20"><table width="96%" align="left"  cellpadding="0" cellspacing="0">
                        <tr>
                          <!-- HTML Spacer row -->
                          <td style="font-size: 0; line-height: 0;" height="20">&nbsp;</td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <!-- Row container for Intro/ Description -->
                    <td align="left" style="background-color: #EAEAEA; font-size: 14px; font-style: normal; font-weight: 100; color: #000000; line-height: 1.8; text-align:justify; padding:10px 20px 0px 20px; font-family: sans-serif;"><p style="padding: 0; margin: 0; margin-top: 20px; margin-left: 40px; display: block;">Sigue estas indicaciones para usar el documento adjunto</p><ul style="list-style: none; padding: 0; margin: 0; margin-top: 10px; margin-left: 40px; margin-bottom: 30px; display: block;"><li>1. Descarga el documento adjunto</li><li>2. Imprímelo y  revisa que sea legible</li><li>3. Llévalo el día de tu vacunación</li></ul></td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <!-- HTML spacer row -->
              <td><table width="96%" align="left"  cellpadding="0" cellspacing="0">
                  <tr>
                    <td><p style="padding: 0; border: 0; margin: 0; font-size: 14px; line-height: 20px; display: block; color: #000000; text-align: center;">En caso exista algún error en el documento enviado por favor comunícate con <span style="font-weight: bold;">yomevacuno@gmail.com</span> indicando tu nombre, DNI y problema ocurrido.</p></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                </table></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>
</body>
</html>

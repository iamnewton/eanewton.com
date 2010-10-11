<?php
	include('globals/globals.php');

	$metaDescription = "";
	$metaKeywords = "finance, finances, orange county, california, la habra, taxes, tax, business, services, bookkeeping, professional, enrolled agent, preparer, accounting, financial, irs representation";
	$pageId = "Resources";
	
	include(INCLUDE_PATH."/globals/head.php");
	include(INCLUDE_PATH."/globals/masthead.php");
	include(INCLUDE_PATH."/globals/breadcrumb.php");
?>

<!-- column1 : start -->
<div class="main">

    <h1><?=$pageTitle ?></h1>

	<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tempor tempor orci. Duis vitae nunc nec elit sollicitudin fringilla. Integer eget urna. Aliquam ultricies eros ut ante. Aenean in nisl. Fusce enim. Sed vel lacus in arcu scelerisque sodales. Sed nec erat in libero viverra ornare. Donec vestibulum fringilla nunc. Cras orci purus, sollicitudin non, vehicula facilisis, dignissim nec, sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque mi nec massa. Ut luctus magna eu risus.</p> -->

    <ul>
        <li>
            <a href="http://www.csea.org" rel="external" >California Society of Enrolled Agents</a>
            <p>CSEA is the state professional organization for tax specialists and their website offers up to date news on tax laws.</p>
        </li>
         <li>
            <a href="http://www.csea.org" >California Society of Enrolled Agents</a>
            <p>NAEA is the national organization for tax professionals and their website offers a host of services and tax law updates.</p>
        </li>
         <li>
            <a href="http://www.ftb.ca.gov" rel="external">Franchise Tax Board</a>
            <p>Offering the latest information on California taxes via the web.</p>
        </li>
         <li>
            <a href="http://www.boe.ca.gov" rel="external">State Board of Equalization</a>
            <p>BOE is the California governing agency over state sales and use tax.</p>
        </li>
         <li>
            <a href="http://www.edd.ca.gov" rel="external">Employment Development Department</a>
            <p>EDD offers online information for employers.</p>
        </li>
         <li>
            <a href="http://www2.cslb.ca.gov/General-Information/interactive-tools/check-a-license/license+request.asp" rel="external">Contractor's State License Board</a>
            <p>Check a contractor's state license here.</p>
        </li>
         <li>
            <a href="http://www.usinfosearch.com/free_ssn_search.htm" rel="external">Social Security Number Validator</a>
            <p>Visit this site to check a person's Social Security number.</p>
        </li>
         <li>
            <a href="http://www.unclefed.com/IRS-Forms/1999/HTML/pub908/p908.html" rel="external">Bankruptcy Tax Guide</a>
            <p>IRS publication 908 all about bankruptcy.</p>
        </li>
    </ul>

</div>
<!-- column1 : end -->

<?php
	include(INCLUDE_PATH."/globals/navigation.php");
	include(INCLUDE_PATH."/globals/footer.php");
?>
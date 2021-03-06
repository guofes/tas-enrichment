<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tasenrichment</title>
    <!-- 网站ICON -->
    <link rel = "Shortcut Icon" href="/julei-10-14/Public/image/yu.ico"> 
    <!-- 引入样式文件 style.css  -->
    <link rel="stylesheet" type="text/css" href="/julei-10-14/Public/css/index.css">
     <script src="/julei-10-14/Public/js/jquery.min.js"></script>
     <style>
        .p_example{
               background:#F0BD4E;
               cursor:pointer;
           }
        </style>
</head>
<body>
    <!-- 背景图片 -->
    <div id="bg-genes"></div>

    <!-- 头部 -->
    <header>
        <div class="header">
            <a href="" class="header-logo">
                <span class="header-logo-icon"> ® </span>
                <h1 class="header-logo-name">TAS enrichment</h1>
                <div class="header-logo-dec">
                    An integrative platform of gene functional annotation
                </div>
            </a>

            <nav class="header-nav">
                <ul>
                    <li><a href="<?php echo U('Manual/manual');?>">Manual</a></li>
                    <li><a href="<?php echo U('Downloads/downloads');?>">Downloads</a></li>
                    <li><a href="<?php echo U('Analysis/analysis');?>">Analysis</a></li>
                    <li><a href="<?php echo U('Search/search');?>">Search</a>
                        <div id="header-subNav">
                            <div class="header-subNav">
                                <a href="<?php echo U('Genes/genes');?>" class="header-nav-active">By Genes</a>
                                <a href="<?php echo U('Traits/traits');?>">By Traits</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="<?php echo U('Index/index');?>">Home</a></li>
                </ul>
            </nav>

            <div class="header-info">
                This is an integrative gene function annotation database, including trait ontology,
                gene ontology, metabolic pathway, and co-expression network information,
                which provides a complete exploration of gene functional roles and comprehensive 
                functional enrichment analysis of a subset of genes of particular interest.
            </div>
        </div>
    </header>

    <div class="container">
        <!-- 中间主体部分 -->
        <div class="main-genes">
           <!-- <div id="wai"> -->
           <div id="fanhui">Return</div> 
              <table id="wai">

                <tbody id="info">

                </tbody>   
                </table>
                <!-- </div> -->

            <div class="gene-form">
                <h2>Search by genes</h2>
                    <div class="gene-input">
                        <legend for="species">Species:</legend>
                        <select name="select" id="species">
                            <option value="Maize">Maize</option>
                            <option value="Rice">Rice</option>
                        </select>
                        <span class="gene-input-note">a dropbox which you can select species</span>
                    </div>
                    <!-- <div class="gene-input">
                        <legend for="study">Study:</legend>
                        <input type="text" id="study" placeholder="All studies">
                        <span class="gene-input-note">a dropbox where you can select study for your search</span>
                    </div>
                    <div class="gene-input">
                        <legend for="dist">LD Dist:</legend>
                        <input type="text" id="dist" placeholder="25 Kb">
                        <span class="gene-input-note">a dropbox where you can select LD for your search</span>
                    </div>
                    <div class="gene-input">
                        <legend for="top">Top percentile:</legend>
                        <input type="text" id="top" placeholder="100%">
                        <span class="gene-input-note">a dropbox where you can select best gene set</span>
                    </div> -->
                    <div class="gene-text">
                        <legend for="geneid">Gene identifiers:</legend>
                        <textarea name="gene" id="geneid" cols="30" rows="10" placeholder="Gene List (Please separate the input by commas and blanks!)"></textarea>
                        <span class="gene-text-note">
                            For maize, please use identifiers from V3, <br/>
                            For rice, please use identifiers from MSU7.0, <br/>
                            eg: GRMZM2G013821,GRMZM2G019799 <br/>
                            or: LOC_Os01g70110,LOC_Os01g55540  <br/>
                            <button type="button" class="p_example">example</button>
                        </span>
                    </div>
                    <h6></h6>
                    <div class="gene-submit">
                        <button id="submit">Submit</button>
                        <button class="reset" id="reset">Reset</button>
                    </div>
            </div>
            <div class="gene-tab">
                <p id= 'download-link' style="display:none">
                        Detailed information can be downloaded by the 
                        <a href="<?php echo U('Genes/download');?>">link</a>
                    </p>
                <table id="table" class="table">
                <thead>
                 <tr>

                <th id="Gene_refGene">Gene_refGene</th>
                <th id="Trait">Trait</th>
                <th id="Level1">pvalue</th>
                <th id="Level2">Level6</th>
                <th id="Level3">Annotation</th>
                <th id="Level4">Ref_name</th>
            </tr>
            </thead> 
                 <tbody id="tbody">
                    
                </tbody>
            
    </table>
          
            </div>

        </div>

        <!-- 页脚 -->
        <footer>
            <div class="footer">
                <ul>
                    <li>
                        <a href="" class="header-logo">
                            <span class="header-logo-icon"> ® </span>
                            <h1 class="header-logo-name">TAS enrichment</h1>
                            <div class="header-logo-dec">
                                An integrative platform of gene functional annotation
                            </div>
                        </a>
                    </li>
                    <li class="footer-info" style="text-align:justify;">
                        © 2017 by Maize Germplasm and Systems Biology Lab at HZAU, Template was adopted from
                        <a href="">Wix.com</a>
                    </li>
                    <li class="footer-info">No.1 Shizishan Street, Hongshan District, Wuhan, Hubei Province, 430070, P.R.China
                        <a href="">hzaulilin@mail.hzau.edu.cn</a>
                    </li>
                    <li class="footer-share">
                        <a href="">
                            <img src="/julei-10-14/Public/image/f.png" alt="faceBook">
                        </a>
                        <a href="">
                            <img src="/julei-10-14/Public/image/t.png" alt="Twitter">
                        </a>
                        <a href="">
                            <img src="/julei-10-14/Public/image/g.png" alt="Google">
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>

</body>
<script>
    Rice_Gene="LOC_Os11g47830,LOC_Os08g06800,LOC_Os01g65650,LOC_Os01g57230,LOC_Os01g55070,LOC_Os01g24440,LOC_Os06g46060,LOC_Os08g43210,LOC_Os12g41650,LOC_Os12g32170,LOC_Os11g37260,LOC_Os10g41440,LOC_Os10g34660,LOC_Os10g31510,LOC_Os10g31100,LOC_Os08g40420,LOC_Os08g39250,LOC_Os08g32520,LOC_Os07g25690,LOC_Os06g36510,LOC_Os06g01460,LOC_Os04g35550,LOC_Os04g26850,LOC_Os04g22340,LOC_Os02g39010,LOC_Os01g67770,LOC_Os01g59260,LOC_Os01g58430,LOC_Os01g55260,LOC_Os01g04840,LOC_Os01g04730,LOC_Os09g08160,LOC_Os09g08160,LOC_Os09g08270,LOC_Os12g39490,LOC_Os12g07380,LOC_Os11g39120,LOC_Os10g06230,LOC_Os10g06030,LOC_Os09g31340,LOC_Os09g31310,LOC_Os08g40310,LOC_Os08g39630,LOC_Os07g45150,LOC_Os07g42970,LOC_Os06g17370,LOC_Os04g04390,LOC_Os03g64030,LOC_Os02g32469,LOC_Os02g32460,LOC_Os01g66140,LOC_Os01g66140,LOC_Os01g66140,LOC_Os01g66140,LOC_Os01g56370,LOC_Os01g56320,LOC_Os01g42934,LOC_Os01g41850,LOC_Os08g42140,LOC_Os02g41980,LOC_Os11g09050,LOC_Os11g08760,LOC_Os11g06630,LOC_Os09g06950,LOC_Os07g34170,LOC_Os05g46600,LOC_Os04g05560,LOC_Os02g41850,LOC_Os02g16580,LOC_Os11g13790,LOC_Os11g08470,LOC_Os11g08420,LOC_Os09g18020,LOC_Os09g15940,LOC_Os08g44610,LOC_Os05g30770,LOC_Os04g13820,LOC_Os02g16970,LOC_Os01g70030,LOC_Os01g02830,LOC_Os11g08445,LOC_Os10g01008,LOC_Os08g38710,LOC_Os08g14470,LOC_Os07g03730,LOC_Os07g01390,LOC_Os04g07380,LOC_Os04g06100,LOC_Os04g06090,LOC_Os03g02370,LOC_Os01g02550,LOC_Os01g02440,LOC_Os11g10500,LOC_Os11g09418,LOC_Os11g08460,LOC_Os11g08410,LOC_Os09g16930,LOC_Os07g32580,LOC_Os07g31220,LOC_Os06g42590,LOC_Os06g38780,LOC_Os06g38650,LOC_Os04g06180,LOC_Os02g42750,LOC_Os02g17430,LOC_Os01g70040,LOC_Os01g08020,LOC_Os01g02810,LOC_Os07g28644,LOC_Os06g37690,LOC_Os06g41180,LOC_Os06g39270,LOC_Os05g30454,LOC_Os02g48640,LOC_Os02g05744,LOC_Os07g25740,LOC_Os07g25740,LOC_Os06g15540,LOC_Os01g44270,LOC_Os12g18700,LOC_Os12g01810,LOC_Os11g08460,LOC_Os11g08460,LOC_Os06g17550,LOC_Os03g13320,LOC_Os08g12640,LOC_Os03g12850,LOC_Os03g05520,LOC_Os01g43050,LOC_Os06g16740,LOC_Os06g15910";
    Maize_Gene= "AC149810.2_FG008,AC185305.3_FG003,AC189750.4_FG004,AC197355.3_FG001,AC203985.4_FG001,AC207722.2_FG009,AC208915.3_FG010,AC215260.3_FG003,AC217050.4_FG007,AC217897.3_FG010,AC233887.1_FG006,AC234513.1_FG005,GRMZM2G002910,GRMZM2G003426,GRMZM2G004161,GRMZM2G004516,GRMZM2G005066,GRMZM2G005939,GRMZM2G006964,GRMZM2G007012,GRMZM2G007729,GRMZM2G008263,GRMZM2G008696,GRMZM2G010871,GRMZM2G010987,GRMZM2G011269,GRMZM2G012758,GRMZM2G013152,GRMZM2G013200,GRMZM2G013430,GRMZM2G013630,GRMZM2G014902,GRMZM2G015804,GRMZM2G015889,GRMZM2G015908,GRMZM2G016281,GRMZM2G016734,GRMZM2G018627,GRMZM2G018820,GRMZM2G024668,GRMZM2G024705,GRMZM2G025175,GRMZM2G027183,GRMZM2G028218,GRMZM2G028535,GRMZM2G028986,GRMZM2G029079,GRMZM2G029506,GRMZM2G031628,GRMZM2G033230,GRMZM2G033846,GRMZM2G033885,GRMZM2G034471,GRMZM2G034797,GRMZM2G035579,GRMZM2G035933,GRMZM2G036880,GRMZM2G036918,GRMZM2G037015,GRMZM2G038931,GRMZM2G039886,GRMZM2G039996,GRMZM2G040095,GRMZM2G040298,GRMZM2G041442,GRMZM2G042323,GRMZM2G044132,GRMZM2G044902,GRMZM2G045473,GRMZM2G046849,GRMZM2G047002,GRMZM2G048281,GRMZM2G050234,GRMZM2G050307,GRMZM2G051256,GRMZM2G053140,GRMZM2G053434,GRMZM2G053946,GRMZM2G054807,GRMZM2G055469,GRMZM2G056093,GRMZM2G057281,GRMZM2G058595,GRMZM2G059801,GRMZM2G061492,GRMZM2G062458,GRMZM2G063238,GRMZM2G063756,GRMZM2G065244,GRMZM2G065928,GRMZM2G065989,GRMZM2G066413,GRMZM2G066489,GRMZM2G067171,GRMZM2G068294,GRMZM2G069694,GRMZM2G070475,GRMZM2G071100,GRMZM2G077436,GRMZM2G077942,GRMZM2G078373,GRMZM2G079559,GRMZM2G079949,GRMZM2G081521,GRMZM2G083408,GRMZM2G083655,GRMZM2G084515,GRMZM2G084859,GRMZM2G085661,GRMZM2G085854,GRMZM2G087254,GRMZM2G089282,GRMZM2G090105,GRMZM2G092363,GRMZM2G092427,GRMZM2G092813,GRMZM2G092817,GRMZM2G093096,GRMZM2G093849,GRMZM2G096753,GRMZM2G097972,GRMZM2G098460,GRMZM2G098596,GRMZM2G101818,GRMZM2G102760,GRMZM2G102959,GRMZM2G103013,GRMZM2G103945,GRMZM2G104549,GRMZM2G104942";
    $(".p_example").click(function(){
        if($("#species").val()=="Maize"){
            $("#geneid").val(Maize_Gene);
        }
        if($("#species").val()=="Rice"){
            $("#geneid").val(Rice_Gene);
        }
    });

            $("#submit").click(function(){
                $("#tbody").empty();
            $.post("<?php echo U('Genes/printgene');?>",{gene:$("#geneid").val().split(/,|，|\s/),select:$("#species").val()},
                function(data){
                  if(data==""){
                    alert("Sorry, No information has been found in our TO system");
                  }
                    else{
                        $("table").show();
                        $("#download-link").show();
 
                    for(var i=0;i<data.length;i++){
                            $('#tbody').append("<tr id="+data[i].id+"><td>"+data[i].gene_refgene+"</td><td>"+data[i].trait+"</td><td>"+data[i].pvalue+"</td><td>"+data[i].level6+"</td><td>"+data[i].annotation+"</td><td>"+data[i].ref_name+"</td></tr>");
                          
                    }
                     $("tr").click(function(){
                        $(".gene-form").hide();
                        $(".gene-tab").hide();

                        $.post("<?php echo U('Genes/info');?>",
                                {
                                    id:$(this).attr("id"),
                                    species:$("#species").val()
                                },
                        function(data){
                              $("#fanhui").show();
                            $("#wai").show();
                            if($("#species").val() == 'Rice'){
                                myhref = 'http://rice.plantbiology.msu.edu/cgi-bin/ORF_infopage.cgi?orf=';
                            }
                            if($("#species").val() == 'Maize'){
                                myhref = 'http://www.maizegdb.org/gene_center/gene/';
                            }
                    $('#info').append("<tr><th>Gene_refGene:</th><td><a href='"+myhref+data.gene_refgene+"'>"+data.gene_refgene+
                        "</td></tr><tr><th>ID:</th><td>"+data.id+
                        "</td></tr><tr><th>ID_ref:</th><td>"+data.id_ref+
                        "</td></tr><tr><th>Trait:</th><td>"+data.trait+
                        "</td></tr><tr><th>Pvalue:</th><td>"+data.pvalue+
                        "</td></tr><tr><th>indel/snp:</th><td>"+data.indel_snp+
                        "</td></tr><tr><th>Chr_ref:</th><td>"+data.chr_ref+
                        "</td></tr><tr><th>Marker_name:</th><td>"+data.marker_name+
                        "</td></tr><tr><th>Marker_set:</th><td>"+data.marker_set+
                        "</td></tr><tr><th>Marker_location:</th><td>"+data.marker_location+
                        "</td></tr><tr><th>allele:</th><td>"+data.allele+
                        "</td></tr><tr><th>organ:</th><td>"+data.organ+
                        "</td></tr><tr><th>MAF:</th><td>"+data.maf+
                        "</td></tr><tr><th>Pop_type:</th><td>"+data.pop_type+
                        "</td></tr><tr><th>Pop_size:</th><td>"+data.pop_size+
                        "</td></tr><tr><th>Model:</th><td>"+data.model+
                        "</td></tr><tr><th>Genome_version:</th><td>"+data.genome_version+
                        "</td></tr><tr><th>Final_version:</th><td>"+data.final_version+
                        "</td></tr><tr><th>Chr:</th><td>"+data.chr+
                        "</td></tr><tr><th>Position:</th><td>"+data.position+
                        "</td></tr><tr><th>Ref:</th><td>"+data.ref+
                        "</td></tr><tr><th>Note:</th><td>"+data.note+
                        "</td></tr><tr><th>Ref_name:</th><td>"+data.ref_name+
                        "</td></tr><tr><th>Chr_gene:</th><td>"+data.chr_gene+
                        "</td></tr><tr><th>start:</th><td>"+data.start+
                        "</td></tr><tr><th>New_gene:</th><td>"+data.new_gene+
                        "</td></tr><tr><th>Annotation:</th><td>"+data.annotation+
                        "</td></tr><tr><th>Level1:</th><td>"+data.level1+
                        "</td></tr><tr><th>Level2:</th><td>"+data.level2+
                        "</td></tr><tr><th>Level3:</th><td>"+data.level3+
                        "</td></tr><tr><th>Level4:</th><td>"+data.level4+
                        "</td></tr><tr><th>Level5:</th><td>"+data.level5+
                        "</td></tr><tr><th>Level6:</th><td>"+data.level6+
                        "</td></tr><tr><th>GO_id:</th><td>"+data.go_id.replace(/;/g,' ')+
                        "</td></tr>");


                            //     "<br ><span>GO_id:</span>"+data.go_id+
                            //     "</div>");
                                });
                         $("#fanhui").click(function(){
                       $("#wai").hide();
                       $("#fanhui").hide();
                       $("#info").empty();
                       $(".gene-tab").show();
                       $(".gene-form").show();
             });
                            });   
                }
                  
                });
            });
            $("#reset").click(function(){
                 window.location.reload();
            });
             
     
            
      
             
                
</script>
</html>
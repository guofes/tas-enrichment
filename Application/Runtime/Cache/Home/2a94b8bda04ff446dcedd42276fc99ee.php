<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TO xxx">
    <meta name="keywords" content="TO, Gene Ontology, microarray, agricultural, enrichment, GO enrichment, NGS, GO">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tasenrichment</title>
    <!-- 网站ICON -->
    <link rel = "Shortcut Icon" href="image/favicon.ico"> 
    <script src="/julei-11-28/Public/js/jquery.min.js"></script>
    <!-- 引入样式文件 style.css  -->
    <link rel="stylesheet" type="text/css" href="/julei-11-28/Public/css/index.css">
    <style>
            .index_information{
                margin-top:30px; 
                background: rgba(255,255,255,0.5);
                color: #076807;
             }
            .index_information table{
                border-collapse:collapse;
                padding: 20px;
                width: 100%;
                margin:0 auto;
            }
            .font_p{
                display: block;
                font-size: 1.5em;
                -webkit-margin-before: 0.83em;
                -webkit-margin-after: 0.83em;
                -webkit-margin-start: 0px;
                -webkit-margin-end: 0px;
                font-weight: bold;
                border-bottom: 1px solid rgba(28, 138, 67, 0.8);
                color: #BE004F;
                line-height: 60px;
                margin-bottom: 10px;
                font-family: '微软雅黑';
            }
            .index_information tr{
                height: 30px;
            }
            .index_th{
                background: rgb(104, 176, 77);
                border:1px solid rgb(104, 176, 77);
            }
            tr td{
                padding-left: 30px;
                font-size:14px;
                border:0 solid #fff;
                border:1px solid rgb(77, 176, 77);
        
            }
        
        
        </style>
</head>
<body>
    
    <!-- 背景图片 -->
    <div id="bg"></div>

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
                                <a href="<?php echo U('Genes/genes');?>">By Genes</a>
                                <a href="<?php echo U('Traits/traits');?>" >By Traits</a>
                                <a href="<?php echo U('Blast/Blast');?>" >By blast</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="<?php echo U('Index/index');?>" class="header-nav-active">Home</a></li>
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
        <div class="main">
            <div class="home-picture" style="height:530px">
                <div class="pic">
                    <img src="/julei-11-28/Public/image/1.png" />
                    <span><a href="<?php echo U('Analysis/analysis');?>">Trait Ontology</a></span>
                </div>
                <div class="pic">
                    <img src="/julei-11-28/Public/image/2.png" />
                    <span><a href="<?php echo U('Analysis/analysis');?>">Gene Ontology</a></span>
                </div>
                <div class="pic">    
                    <img src="/julei-11-28/Public/image/3.png" />
                    <span><a href="<?php echo U('Analysis/analysis');?>">Plant Cycle</a></span>
                </div>
                <div class="pic">
                    <img src="/julei-11-28/Public/image/4.png" />
                    <span><a href="<?php echo U('Analysis/analysis');?>">Coexpression</a></span>
                </div>
            </div>
            <p class="font_p">Summary of TAS database</p>
            <div class="index_information">
                <table>
                    <tr class="index_th"><th>Type</th><th>Maize</th><th>Rice</th></tr>
                    <tr class="index_td"><td>Number of GWAS literatures</td><td>45</td><td>34</td></tr>
                    <tr class="index_td"><td>Number of GWAS traits</td><td>361</td><td>464</td></tr>
                    <tr class="index_td"><td>Number of GWAS genes</td><td>10276</td><td>3666</td></tr>
                    <tr class="index_td"><td>Number of TO terms</td><td>LD within 10k (136)</td><td>LD within 25k (168)</td></tr>
                    <tr class="index_td"><td>Number of TO genes</td><td>LD within 10k (21231)</td><td>LD within 25k (40448)</td></tr>
                    <tr class="index_td"><td>Number of TO terms</td><td>LD within 25k (136)</td><td>LD within 50k (168)</td></tr>
                    <tr class="index_td"><td>Number of TO genes</td><td>LD within 25k (35410)</td><td>LD within 50k (76889)</td></tr>
                    <tr class="index_td"><td>Number of GO terms</td><td>4613</td><td>1550</td></tr>
                    <tr class="index_td"><td>Number of GO genes</td><td>25864</td><td>24076</td></tr>
                    <tr class="index_td"><td>Number of PC terms</td><td>422</td><td>336</td></tr>
                    <tr class="index_td"><td>Number of PC genes</td><td>9955</td><td>8635</td></tr>
                    <tr class="index_td"><td>Number of CO genes</td><td>32317</td><td>23171</td></tr>
                    <tr class="index_td"><td>Number of CO modules</td><td>189</td><td>187</td></tr>

                </table>
            </div>
            <div class="home-new">
                <h2>NEWS</h2>
                <a href="#">Our first version of TAS database is available right now!</a><br>
                <p>Number of pageviews to the website after October 20, 2017:
                    <b style="color:red"> <?php echo ($count); ?> </b>
                    hits
                    <button id="mapview" >mapview</button>
                    <div id="mapviewdiv">
                            <script  src='//rf.revolvermaps.com/0/0/8.js?i=5dbafy563a4&amp;m=0&amp;c=ff0000&amp;cr1=ffffff&amp;f=arial&amp;l=33' async='async'></script>    
                    </div>    
                </p>
                <br>
                <h2>How to cite</h2>
                <p>
                   Qingchun Pan, Junfeng Wei, Feng Guo, 
                   Suiyu Huang, Xukai Li, Yong Gong, Hao Liu, 
                   Zhao Li, Steffen Knauer, Marja C.P. Timmermans, 
                   Jianxiao Liu* & Lin Li* . TAS: An integrative 
                   toolkit bridging the genome and phenome in crops. 2017, 
                   Prepared to submit.
                </p>   
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
                            <img src="/julei-11-28/Public/image/f.png" alt="faceBook">
                        </a>
                        <a href="">
                            <img src="/julei-11-28/Public/image/t.png" alt="Twitter">
                        </a>
                        <a href="">
                            <img src="/julei-11-28/Public/image/g.png" alt="Google">
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
</body>
<script>
    window.onload = function() {
    $('#mapviewdiv').hide();  
    var flag = true;
    $('#mapview').click(function(){
        if(flag) {
            $('#mapviewdiv').show();
            flag = false;
        } else {
            $('#mapviewdiv').hide();
            flag = true;
        }
    });
    }
</script>
</html>
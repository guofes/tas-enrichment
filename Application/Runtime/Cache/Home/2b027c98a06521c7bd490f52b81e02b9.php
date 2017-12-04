<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tasenrichment</title>
    <!-- 网站ICON -->
    <link rel = "Shortcut Icon" href="image/favicon.ico"> 
    <!-- 引入样式文件 style.css  -->
    <link rel="stylesheet" type="text/css" href="/julei-11-28/Public/css/index.css">
    <style>
    .main{
       background-color:  rgba(255, 255, 255, 0.9);
       padding-top:20px;
       font-family: Arial, Helvetica, sans-serif;
       color: #000000;
        text-align: justify;
    }
    .h2_head{
        border-bottom: 2px solid rgba(137, 191, 36, 0.53);
    }
    .main h2{    
    /* margin: 0; */
    margin-left: 3px;
    margin-bottom: 5px;
    line-height: normal;
    letter-spacing: normal;
    color:#68b04d;
    }
    .main .head_1{
        margin-top:10px;
    }
    .main span{
        font-size: 20px;
       font-weight: bold;
    }
    .h2_head span{
        font-weight: 200;
    }
    .manual{
      padding-top: 30px;
    }
    .manual img{
        display: block;
        margin: 20px auto;
    }
    .manual_head{
       margin-left: 30px;
        color:red;
        font-weight: 800;
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
                    <li><a href="<?php echo U('Manual/manual');?>" class="header-nav-active">Manual</a></li>
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
        <div class="main">
            <div class="h2_head">
                <h2>Gene functional annotation and enrichment by TAS</h2>
            </div>
            <div class="head_1">
                <span>TAS provides an user-friendly interface for gene functional annotation, enrichment analysis, genome-wide extraction of trait-specific genes, cross-checking of different functional annotation databases, and other features, which bridge genome and phenome in crops.</span>
            </div>
            <div class="manual">
                <span class="manual_head">1. Gene function search</span>
                <div class="manual_1">
                        <img src="/julei-11-28/Public/image/manual1.png">
                        <p>&nbsp&nbsp&nbsp&nbsp Click Search to start your search, which can allow you to either get the annotated functional description of your query genes or obtain all the annotated genes associated with phenotypic variations.</p>
                </div>
                <div class="li_manual_1">
                        <span class="manual_head" style="color:rgb(137, 191, 36);">1.1 Search by genes</span>
                        <div class="manual_1">
                                <img src="/julei-11-28/Public/image/manual2.png">
                                <p>&nbsp&nbsp&nbsp&nbsp First, select the species that you are working on through the dropbox; Then, input the query gene list of your interest in the text box of gene identifiers, and submit your query. The TO terms, which the query genes are associated with, will be listed below. For each gene-to-TO association item, you can either get a brief summary of the extent of association with phenotypic variation on the same page, or click the row of a specific gene to get a detailed association mapping results as follow:</p>
                                <img src="/julei-11-28/Public/image/manual3.png">
                                <p>&nbsp&nbsp&nbsp&nbsp Alternatively, you can download all the gene-to-TO association information by link "Download". An excel file will be generated to hold the gene-to-TO association for all query genes.</p>
                            </div>
                </div> 
                <div class="li_manual_2">
                        <span class="manual_head" style="color:rgb(137, 191, 36);">1.2 Search by traits</span>
                        <div class="manual_1">
                                <img src="/julei-11-28/Public/image/manual4.png">
                                <p>&nbsp&nbsp&nbsp&nbsp First, select the species that you are working on through the dropbox; Then, input the query trait of your interest in the text box of trait identifiers, and submit your query. The gene-to-TO terms, which the query trait is associated with, will be listed below. For each gene-to-TO association item, you can either get a brief summary of the extent of association with phenotypic variation on the same page, or click the row of a specific gene to get a detailed association mapping results as described above. Similarly, you can download all the gene-to-TO association information for the query trait by link "Download". An excel file will be generated to hold the gene-to-TO association for the trait of your interest.</p>
                        </div>
                </div>
            </div>
            <div class="manual">
                    <span class="manual_head">2. Functional enrichment in TO, GO, PC and CoExpNetworks</span>
                    <div class="manual_1">
                            <img src="/julei-11-28/Public/image/manual5.png">
                            <p>&nbsp&nbsp&nbsp&nbsp Click Analysis to start your Functional enrichment analysis, which can allow you to get an all-in-one enrichment results in TO, GO, PC and CoExpNetworks for your query genes or trait. To do that, first of all, you need to set up all different parameters: Species, Type, which allow you to submit your query in the format of either gene list or phenotypic trait of your interest, LD Dist, which indicates the physical distance of linkage disequalibrium decay for the selection of different gene-to-trait associations, Top percentile, of which the association mapping results (gene-to-TO terms) in each study will be used for the enrichment analysis, and Study, by which you can select different association mapping studies for the functional enrichment analysis. Then, you can input either a gene list of your interest or a specific trait that you are interested in. Submit your functional enrichment analysis, you will get an all-in-one analyzed results on the same webpage as follow:</p>
                    </div>
                    <div class="manual_1">
                            <img src="/julei-11-28/Public/image/manual6.webp">
                            <p>&nbsp&nbsp&nbsp&nbsp Similarly, you can download all the result information by the download link. Then you can carefully re-analyze all the functional annotation and enrichment results and cross-validate these results among TO, GO, PC and Co-expression networks. </p>
                    </div>

            </div>
            <div class="manual">
                <span class="manual_head">3. Downloads</span>
                <p>&nbsp&nbsp&nbsp&nbsp We've collected as many gene functional annotations as possible for TO, GO, PC and Co-expression networks, carefully curated these data one by one manually, and integrated all these datasets in out database. TO information were collected based on the association mapping studies in crops. The Co-expression networks were constructed using tons of transcriptomic RNA-Seq data in reference inbreds in maize and rice, respectively. However, GO and PC datasets were originally obtained from AgriGO (http://bioinfo.cau.edu.cn/agriGO/) and the Plant Cycle database (https://www.plantcyc.org/), respectively. If you use the GO and PC functional information, Please cite these original references. All the data that we've collected are public available through the links in the Download webpage as follow:</p>
                <img src="/julei-11-28/Public/image/manual7.png">
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
</html>
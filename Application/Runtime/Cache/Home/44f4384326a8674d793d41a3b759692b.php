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
    <link rel="stylesheet" type="text/css" href="/julei-11-28/Public/css/downloads.css">
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
                    <li><a href="<?php echo U('Downloads/downloads');?>" class="header-nav-active">Downloads</a></li>
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
            <div class="main-header"> Datasets deposited in our database </div>
            <div class="main-down">
                <div class="main-down-row">
                    <a href="#">
                        <img src="/julei-11-28/Public/image/down1.jpg">
                    </a>
                    <div class="main-down-row-right">
                        <div class="right-header">
                            Trait Ontology Dataset
                        </div>
                        <div class="right-middle">
                            Gene-to-trait associations
                        </div> 
                        <div class="right-footer">
                             We carefully curated the gene-to-trait associations based 
                             on hundreds of association studies, and assigned all the 
                             association information into the hierarchical structure of 
                             Trait Ontology. This TO dataset contains over 10,000 genes 
                             and more than 100,000 gene-to-trait associations, which might 
                             be the biggest TO information in crops up to now. 
                        </div>     
                    </div>
                </div>   
                <div class="main-down-row">
                    <a href="#">
                        <img src="/julei-11-28/Public/image/down2.jpg">
                    </a>
                    <div class="main-down-row-right">
                        <div class="right-header">
                            Gene Ontology Dataset
                        </div>
                        <div class="right-middle">
                            Gene-to-GO terms associations
                        </div> 
                        <div class="right-footer">
                            Gene Ontology is a unifying functional annotation 
                            of genes. All the GO information deposited in our 
                            database was collected from AgriGO website 
                            (http://bioinfo.cau.edu.cn/agriGO/). Please cite 
                            original AgriGO reference if you report the GO 
                            enrichment results. 
                        </div>     
                    </div>
                </div> 
                <div class="main-down-row">
                    <a href="#">
                        <img src="/julei-11-28/Public/image/down3.jpg">
                    </a>
                    <div class="main-down-row-right">
                        <div class="right-header">
                            Plant Cycle Dataset
                        </div>
                        <div class="right-middle">
                            Genes involved in metabolic pathways
                        </div> 
                        <div class="right-footer">
                            Plant Cycle Dataset contains manually curated 
                            or reviewed information about shared and unique 
                            metabolic pathways in maize and rice. All the 
                            annotations were collected from PlantCyc database 
                            (https://www.plantcyc.org/). Please cite original 
                            PlantCyc references if you report the plant metabolic 
                            pathway enrichment results.  
                        </div>     
                    </div>
                </div>
                <div class="main-down-row">
                    <a href="#">
                        <img src="/julei-11-28/Public/image/down4.jpg">
                    </a>
                    <div class="main-down-row-right">
                        <div class="right-header">
                            Co-expression Dataset
                        </div>
                        <div class="right-middle">
                            Transcriptomic gene-to-gene networks
                        </div> 
                        <div class="right-footer">
                            Co-expression network approaches provide insights into
                             the patterns of transcriptome organization and suggest 
                             common biological functions for networked genes. We've 
                             constructed comprehensive and robust gene-to-gene 
                             co-expression networks in both maize and rice 
                             (Li et al., BMC Genomics, 2016).   
                        </div>     
                    </div>
                </div>                 
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
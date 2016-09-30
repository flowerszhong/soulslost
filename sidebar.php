<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soulslost
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->

<div class="aside-outer aside-outer-one-col" ex-z-index="rightPulse" style="z-index: 3;">
   <div>
      <div class="tags-outer">
         <div >
            <div>
               <header class="u-cf"> <span class="u-pullLeft u-fontSizeXL">热门标签</span> </header>
               <ul class="u-marginTl u-fontSizeM">
                  <li class="tag-popular u-borderB u-paddingLm u-paddingRm" > <a class="tag-popular-link u-colorGreyDarker u-block u-cf"  href="/search?t=39"> <span class="u-pullLeft" >Spotify</span> <span class="u-pullRight" >289</span> </a> </li>
                  <li class="tag-popular u-borderB u-paddingLm u-paddingRm" > <a class="tag-popular-link u-colorGreyDarker u-block u-cf"  href="/search?t=397"> <span class="u-pullLeft" >流媒体</span> <span class="u-pullRight" >240</span> </a> </li>
                  <li class="tag-popular u-borderB u-paddingLm u-paddingRm" > <a class="tag-popular-link u-colorGreyDarker u-block u-cf"  href="/search?t=1481"> <span class="u-pullLeft" >行业评论</span> <span class="u-pullRight" >212</span> </a> </li>
                  <li class="tag-popular u-borderB u-paddingLm u-paddingRm" > <a class="tag-popular-link u-colorGreyDarker u-block u-cf"  href="/search?t=15"> <span class="u-pullLeft" >数字音乐</span> <span class="u-pullRight" >142</span> </a> </li>
                  <li class="tag-popular u-borderB u-paddingLm u-paddingRm" > <a class="tag-popular-link u-colorGreyDarker u-block u-cf"  href="/search?t=501"> <span class="u-pullLeft" >音乐人</span> <span class="u-pullRight" >141</span> </a> </li>
                  <li class="tag-popular u-borderB u-paddingLm u-paddingRm" > <a class="tag-popular-link u-colorGreyDarker u-block u-cf"  href="/search?t=1473"> <span class="u-pullLeft" >成为音乐人</span> <span class="u-pullRight" >133</span> </a> </li>
                  <li class="tag-popular u-borderB u-paddingLm u-paddingRm" > <a class="tag-popular-link u-colorGreyDarker u-block u-cf"  href="/search?t=14"> <span class="u-pullLeft" >推广</span> <span class="u-pullRight" >125</span> </a> </li>
                  <li class="tag-popular u-borderB u-paddingLm u-paddingRm" > <a class="tag-popular-link u-colorGreyDarker u-block u-cf"  href="/search?t=447"> <span class="u-pullLeft" >app</span> <span class="u-pullRight" >123</span> </a> </li>
                  <li class="tag-popular u-borderB u-paddingLm u-paddingRm" > <a class="tag-popular-link u-colorGreyDarker u-block u-cf"  href="/search?t=16"> <span class="u-pullLeft" >版权</span> <span class="u-pullRight" >118</span> </a> </li>
                  <li class="tag-popular u-borderB u-paddingLm u-paddingRm" > <a class="tag-popular-link u-colorGreyDarker u-block u-cf"  href="/search?t=282"> <span class="u-pullLeft" >Pandora</span> <span class="u-pullRight" >117</span> </a> </li>
                  <li class="tag-popular u-borderB u-paddingLm u-paddingRm" > <a class="tag-popular-link u-colorGreyDarker u-block u-cf"  href="/search?t=277"> <span class="u-pullLeft" >演出</span> <span class="u-pullRight" >113</span> </a> </li>
                  <li class="tag-popular u-borderB u-paddingLm u-paddingRm" > <a class="tag-popular-link u-colorGreyDarker u-block u-cf"  href="/search?t=3445"> <span class="u-pullLeft" >终极攻略</span> <span class="u-pullRight" >103</span> </a> </li>
                  <li class="tag-popular u-borderB u-paddingLm u-paddingRm" > <a class="tag-popular-link u-colorGreyDarker u-block u-cf"  href="/search?t=4952"> <span class="u-pullLeft" >吉他</span> <span class="u-pullRight" >102</span> </a> </li>
                  <li class="tag-popular u-borderB u-paddingLm u-paddingRm" > <a class="tag-popular-link u-colorGreyDarker u-block u-cf"  href="/search?t=2735"> <span class="u-pullLeft" >livehouse</span> <span class="u-pullRight" >101</span> </a> </li>
                  <li class="tag-popular u-borderB u-paddingLm u-paddingRm" > <a class="tag-popular-link u-colorGreyDarker u-block u-cf"  href="/search?t=1257"> <span class="u-pullLeft" >音色</span> <span class="u-pullRight" >96</span> </a> </li>
                  <li class="tag-popular u-borderB u-paddingLm u-paddingRm" > <a class="tag-popular-link u-colorGreyDarker u-block u-cf"  href="/search?t=65"> <span class="u-pullLeft" >iTunes</span> <span class="u-pullRight" >95</span> </a> </li>
                  <li class="tag-popular u-borderB u-paddingLm u-paddingRm" > <a class="tag-popular-link u-colorGreyDarker u-block u-cf"  href="/search?t=4161"> <span class="u-pullLeft" >国外</span> <span class="u-pullRight" >95</span> </a> </li>
                  <li class="tag-popular u-borderB u-paddingLm u-paddingRm" > <a class="tag-popular-link u-colorGreyDarker u-block u-cf"  href="/search?t=43"> <span class="u-pullLeft" >乐队</span> <span class="u-pullRight" >94</span> </a> </li>
                  <li class="tag-popular u-borderB u-paddingLm u-paddingRm" > <a class="tag-popular-link u-colorGreyDarker u-block u-cf"  href="/search?t=1051"> <span class="u-pullLeft" >音乐产业</span> <span class="u-pullRight" >86</span> </a> </li>
                  <li class="tag-popular u-borderB u-paddingLm u-paddingRm" > <a class="tag-popular-link u-colorGreyDarker u-block u-cf"  href="/search?t=508"> <span class="u-pullLeft" >专辑</span> <span class="u-pullRight" >83</span> </a> </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
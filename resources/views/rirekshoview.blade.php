
<html>
  <head>
    <style>
      @media print {
        body, page {
          margin: 0;
          box-shadow: 0;
        }
      }
      html {
        font-size: 62.5%;
      }
      body {
        background: rgb(204,204,204);
        font-size: 10px;
        font-size: 1rem;
      }
      page {
        background: white;
        display: block;
        margin: 0 auto;
        margin-bottom: 0.5cm;
        box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
      }
      page[size="A3"][layout="portrait"] {
        width: 1260px;
        height: 930px;
      }
      td {
        padding: 0 5px;
      }
      .bd-t-s {
        border-top: 1px solid;
      }
      .bd-r-s {
        border-right: 1px solid;
      }
      .bd-b-s {
        border-bottom: 1px solid;
      }
      .bd-l-s {
        border-left: 1px solid;
      }
      .bd-t-dt {
        border-top: 1px dotted;
      }
      .bd-r-dt {
        border-right: 1px dotted;
      }
      .bd-b-dt {
        border-bottom: 1px dotted;
      }
      .bd-l-dt {
        border-left: 1px dotted;
      }
      .bd-t-db {
        border-top: 4px double;
      }
      .center {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <page size="A3" layout="portrait" style="padding: 60px; box-sizing: border-box">
      <table border-collapse="collapse" cellspacing="0" cellpadding="0" style="table-layout:fixed; width:0">
        <thead>
          <tr style="height: 0px">
            <th style="width:70px"></th>
            <th style="width:45px"></th>
            <th style="width:155px"></th>
            <th style="width:70px"></th>
            <th style="width:70px"></th>
            <th style="width:130px"></th>
            <th style="width:60px"></th>
            <th style="width:70px"></th>
            <th style="width:45px"></th>
            <th style="width:425px"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($cvdata as $items)
          <tr style="height:33.5px">
            <td style="font-size:2rem; line-height:2rem; text-align:center" colspan="2">履 歴 書</td>
            <td></td>
            <td></td>
            <td></td>
            <td style="text-align:right">2016年 12月 14日 現在</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr style="height:33.5px">
            <td class="bd-t-s bd-l-s">{{$items->firstname}}</td>
            <td class="bd-t-s bd-l-s" colspan="3">{{$items->lastname}}</td>
            @if($items->gender == 'man')
            <td class="bd-t-s bd-l-dt center" rowspan="3">男</td>
            @else
            <td class="bd-t-s bd-l-dt center" rowspan="3">女</td>
            @endif
            <td class="bd-t-s bd-r-s bd-l-s center" rowspan="4">（写真を貼る位置）</td>
            <td></td>
            <td class="bd-t-s bd-l-s center">年</td>
            <td class="bd-t-s bd-l-dt center">月</td>
            <td class="bd-t-s bd-r-s bd-l-dt center">賞罰</td>
          </tr>
          <tr style="height:33.5px">
            <td class="bd-t-dt bd-l-s" rowspan="2">氏 名</td>
            <td class="bd-t-dt" colspan="3" rowspan="2">{{$items->firstname}}　{{$items->lastname}}</td>
            <td></td>
            <td class="bd-t-db bd-l-s center"></td>
            <td class="bd-t-db bd-l-dt center"></td>
            <td class="bd-t-db bd-r-s bd-l-dt center">賞罰なし</td>
          </tr>
          <tr style="height:33.5px">
            <td></td>
            <td class="bd-t-dt bd-l-s center"></td>
            <td class="bd-t-dt bd-l-dt center"></td>
            <td class="bd-t-dt bd-r-s bd-l-dt center"></td>
          </tr>
          <tr style="height:33.5px">
            <td class="bd-t-s bd-l-s">生年月日</td>
            <td class="bd-t-s bd-l-s" colspan="4">1987年 01月 01日生 (満{{$items->age}}歳)</td>
            <td></td>
            <td class="bd-t-dt bd-l-s center"></td>
            <td class="bd-t-dt bd-l-dt center"></td>
            <td class="bd-t-dt bd-r-s bd-l-dt center"></td>
          </tr>
          <tr style="height:33.5px">
            <td class="bd-t-s bd-l-s">フリガナ</td>
            <td class="bd-t-s bd-r-s bd-l-s" colspan="5">トウキョウトミナトクシバコウエン4-2-8</td>
            <td></td>
            <td class="bd-t-dt bd-l-s center"></td>
            <td class="bd-t-dt bd-l-dt center"></td>
            <td class="bd-t-dt bd-r-s bd-l-dt center"></td>
          </tr>
          <tr style="height:33.5px">
            <td class="bd-t-dt bd-l-s">住 所</td>
            <td class="bd-t-dt bd-r-s" colspan="5">( 〒 105-0011 )</td>
            <td></td>
            <td class="bd-t-dt bd-l-s center"></td>
            <td class="bd-t-dt bd-l-dt center"></td>
            <td class="bd-t-dt bd-r-s bd-l-dt center"></td>
          </tr>
          <tr style="height:33.5px">
            <td class="bd-r-s bd-l-s" colspan="6" rowspan="2">東京都港区芝公園4ｰ2ｰ8</td>
            <td></td>
            <td class="bd-t-dt bd-l-s center"></td>
            <td class="bd-t-dt bd-l-dt center"></td>
            <td class="bd-t-dt bd-r-s bd-l-dt center"></td>
          </tr>
          <tr style="height:33.5px">
            <td></td>
            <td class="bd-t-dt bd-l-s center"></td>
            <td class="bd-t-dt bd-l-dt center"></td>
            <td class="bd-t-dt bd-r-s bd-l-dt center"></td>
          </tr>
          <tr style="height:33.5px">
            <td class="bd-t-s bd-l-s">電話</td>
            <td class="bd-t-s" colspan="2">{{$items->phone}}</td>
            <td class="bd-t-s bd-l-s">携帯電話</td>
            <td class="bd-t-s bd-r-s" colspan="2">{{$items->phone}}</td>
            <td></td>
            <td class="bd-t-dt bd-l-s center"></td>
            <td class="bd-t-dt bd-l-dt center"></td>
            <td class="bd-t-dt bd-r-s bd-l-dt center"></td>
          </tr>
          <tr style="height:33.5px">
            <td class="bd-t-s bd-l-s">E-mail</td>
            <td class="bd-t-s bd-r-s" colspan="5">{{$items->email}}</td>
            <td></td>
            <td class="bd-t-s bd-l-s center">年</td>
            <td class="bd-t-s bd-l-dt center">月</td>
            <td class="bd-t-s bd-r-s bd-l-dt center">免許・資格</td>
          </tr>
          <tr style="height:33.5px">
            <td class="bd-t-s bd-l-s center">年</td>
            <td class="bd-t-s bd-l-dt center">月</td>
            <td class="bd-t-s bd-r-s bd-l-dt center" colspan="4">学歴・職歴</td>
            <td></td>
            <td class="bd-t-db bd-l-s center">平成xx</td>
            <td class="bd-t-db bd-l-dt center">1</td>
            <td class="bd-t-db bd-r-s bd-l-dt">普通自動車運転免許 取得</td>
          </tr>
          <tr style="height:33.5px">
            <td class="bd-t-db bd-l-s center"></td>
            <td class="bd-t-db bd-l-dt center"></td>
            <td class="bd-t-db bd-r-s bd-l-dt center" colspan="4">学歴</td>
            <td></td>
            <td class="bd-t-dt bd-l-s center"></td>
            <td class="bd-t-dt bd-l-dt center"></td>
            <td class="bd-t-dt bd-r-s bd-l-dt"></td>
          </tr>
          <tr style="height:33.5px">
            <td class="bd-t-dt bd-l-s center">平成xx</td>
            <td class="bd-t-dt bd-l-dt center">4</td>
            <td class="bd-t-dt bd-r-s bd-l-dt" colspan="4">○○高校 入学</td>
            <td></td>
            <td class="bd-t-dt bd-l-s center"></td>
            <td class="bd-t-dt bd-l-dt center"></td>
            <td class="bd-t-dt bd-r-s bd-l-dt"></td>
          </tr>
          <tr style="height:33.5px">
            <td class="bd-t-dt bd-l-s center">平成xx</td>
            <td class="bd-t-dt bd-l-dt center">3</td>
            <td class="bd-t-dt bd-r-s bd-l-dt" colspan="4">○○高校 卒業</td>
            <td></td>
            <td class="bd-t-dt bd-l-s center"></td>
            <td class="bd-t-dt bd-l-dt center"></td>
            <td class="bd-t-dt bd-r-s bd-l-dt"></td>
          </tr>
          <tr style="height:33.5px">
            <td class="bd-t-dt bd-l-s center">平成xx</td>
            <td class="bd-t-dt bd-l-dt center">4</td>
            <td class="bd-t-dt bd-r-s bd-l-dt" colspan="4">○○大学 △△学部 □□学科 入学</td>
            <td></td>
            <td class="bd-t-dt bd-l-s center"></td>
            <td class="bd-t-dt bd-l-dt center"></td>
            <td class="bd-t-dt bd-r-s bd-l-dt"></td>
          </tr>
          <tr style="height:33.5px">
            <td class="bd-t-dt bd-l-s center">平成xx</td>
            <td class="bd-t-dt bd-l-dt center">3</td>
            <td class="bd-t-dt bd-r-s bd-l-dt" colspan="4">○○大学 △△学部 □□学科 卒業</td>
            <td></td>
            <td class="bd-t-dt bd-l-s center"></td>
            <td class="bd-t-dt bd-l-dt center"></td>
            <td class="bd-t-dt bd-r-s bd-l-dt"></td>
          </tr>
          <tr style="height:33.5px">
            <td class="bd-t-dt bd-l-s center"></td>
            <td class="bd-t-dt bd-l-dt center"></td>
            <td class="bd-t-dt bd-r-s bd-l-dt center" colspan="4"></td>
            <td></td>
            <td class="bd-t-dt bd-l-s center"></td>
            <td class="bd-t-dt bd-l-dt center"></td>
            <td class="bd-t-dt bd-r-s bd-l-dt"></td>
          </tr>
          <tr style="height:33.5px">
            <td class="bd-t-dt bd-l-s center"></td>
            <td class="bd-t-dt bd-l-dt center"></td>
            <td class="bd-t-dt bd-r-s bd-l-dt center" colspan="4">職歴</td>
            <td></td>
            <td class="bd-t-dt bd-l-s center"></td>
            <td class="bd-t-dt bd-l-dt center"></td>
            <td class="bd-t-dt bd-r-s bd-l-dt"></td>
          </tr>
          <tr style="height:33.5px">
            <td class="bd-t-dt bd-l-s center">平成xx</td>
            <td class="bd-t-dt bd-l-dt center">4</td>
            <td class="bd-t-dt bd-r-s bd-l-dt" colspan="4">○○株式会社 入社</td>
            <td></td>
            <td class="bd-t-s bd-r-s bd-l-s" colspan="3">本人希望記入欄</td>
          </tr>
          <tr style="height:33.5px">
            <td class="bd-t-dt bd-l-s center">平成xx</td>
            <td class="bd-t-dt bd-l-dt center">12</td>
            <td class="bd-t-dt bd-r-s bd-l-dt" colspan="4">○○株式会社 退職</td>
            <td></td>
            <td class="bd-t-s bd-r-s bd-b-s bd-l-s" colspan="3" rowspan="3">特に希望する事項はありません。</td>
          </tr>
          <tr style="height:33.5px">
            <td class="bd-t-dt bd-l-s center">平成xx</td>
            <td class="bd-t-dt bd-l-dt center">1</td>
            <td class="bd-t-dt bd-r-s bd-l-dt" colspan="4">株式会社○○ 入社</td>
            <td></td>
          </tr>
          <tr style="height:33.5px">
            <td class="bd-t-dt bd-b-s bd-l-s center"></td>
            <td class="bd-t-dt bd-b-s bd-l-dt center"></td>
            <td class="bd-t-dt bd-r-s bd-b-s bd-l-dt" colspan="4">現在に至る</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      @endforeach
    </page>
  </body>
</html>
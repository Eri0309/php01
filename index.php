<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <title>アンケート入力</title>
</head>

<body>
    <h1>アンケートフォーム</h1>
    <h2>あなた自身のことについてお聞きします</h2>
    <form method="post" action="write.php">
        <p>お名前：<input type="text" name="name" size="20"></p>
        <p>メールアドレス：<input type="text" name="email" size="20"></p>
        <p>性別：
            <select name="gender" id="">
            <option value="男性">男性</option>
            <option value="女性">女性</option>
            <option value="その他">その他</option>
            </select>
        </p>
        <p>年代：<select name="age" id="">
            <option value="10代">10代</option>
            <option value="20代">20代</option>
            <option value="30代">30代</option>
            <option value="40代">40代</option>
            <option value="50代">50代</option>
            <option value="60代">60代</option>
            <option value="70代">70代</option>
            <option value="80代">80代</option>
            <option value="90代">90代</option>
            <option value="それ以上">それ以上</option>
        </select></p>
        <p>職業：
            <select name="career" id="">
            <option value="会社員">会社員</option>
            <option value="アルバイト・パート">アルバイト・パート</option>
            <option value="自営業">自営業</option>
            <option value="公務員">公務員</option>
            <option value="主夫・主婦">主夫・主婦</option>
            <option value="学生">学生</option>
            <option value="無職">無職</option>
            </select>
        </p>
        <p>住んでいる地区：
            <select name="area" id="">
            <option value="北海道">北海道</option>
            <option value="東北">東北</option>
            <option value="北陸">北陸</option>
            <option value="関東">関東</option>
            <option value="中部">中部</option>
            <option value="関西">関西</option>
            <option value="中国">中国</option>
            <option value="四国">四国</option>
            <option value="九州">九州</option>
            </select>
        </p>

    <h2>データの活用の許諾についてお聞きします</h2>
    <p>問1：個人が特定されない形であれば上記で回答した個人情報と紐付けて移動データを提供しても良いと考えますか</p>
    <p>
        <input type="radio" name="question1" value="①">①提供して良い
        <input type="radio" name="question1" value="②">②提供したくない
        <br>①を選択した方は「問4」の設問にお進みください。
        <br>②を選択した方は「問2」の設問にお進みください。
    </p>
    <p>問2：個人情報と紐付けた移動データを提供したくない理由は何ですか（複数回答可）</p>
    <p>
        <input type="checkbox" name="question2" value="①">①情報漏洩が心配
        <input type="checkbox" name="question2" value="②">②目的外に利用されることが不安
        <input type="checkbox" name="question2" value="③">③第三者への提供が心配
        <input type="checkbox" name="question2" value="④">④その他（自由記述）<input type="text" name="free1">
    </p>
    <p>問3：個人情報と紐付けた移動データを提供したくない理由は何ですか（複数回答可）</p>
    <p>
        <input type="checkbox" name="question3" value="①">①情報漏洩が心配
        <input type="checkbox" name="question3" value="②">②目的外に利用されることが不安
        <input type="checkbox" name="question3" value="③">③第三者への提供が心配
        <input type="checkbox" name="question3" value="④">④その他（自由記述）<input type="text" name="free2">
    </p>
    <p>問4：個人情報と紐付けた移動データを提供したくない理由は何ですか（複数回答可）</p>
    <p>
        <input type="checkbox" name="question4" value="①">①情報漏洩が心配
        <input type="checkbox" name="question4" value="②">②目的外に利用されることが不安
        <input type="checkbox" name="question4" value="③">③第三者への提供が心配
        <input type="checkbox" name="question4" value="④">④その他（自由記述）<input type="text" name="free3">
    </p>
    
    <p><input type="submit" value="送信"></p>
    </form>

    
<script>


</script>
</body>
</html>
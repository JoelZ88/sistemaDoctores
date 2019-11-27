<?php 
    include "./conexion.php";
    
    if(isset($_GET['id'])){
        $id_receta= $_GET['id'];
        $consulta = "SELECT * FROM receta where id_receta='$id_receta'";
        $resultado = mysqli_query($conexion,$consulta);

        if(mysqli_num_rows($resultado)==1){
           $row = mysqli_fetch_array($resultado);
           $id_doctor = $row['id_doctor']; 
           $paciente = $row['paciente'];
           $edad = $row['edad'];
           $peso = $row['peso'];
           $talla = $row['talla'];
           $ta = $row['ta'];
           $fe = $row['fe'];
           $temp = $row['temp'];
           $receta = $row['receta'];
          /* echo "Tu paciente es :".$paciente."<br>";
           echo "su doctor es :".$id_doctor."<br>";
           echo "su edad es :".$edad."<br>";
           echo "su talla es :".$talla."<br>";
           echo "su ta es: ".$ta."<br>";
           echo "su fe es :".$fe."<br>";
           echo "Tu temp es :".$temp."<br>";
           echo "Tu receta es :".$receta."<br>";*/
        }
    }
    if(isset($_POST['modificar'])){
        $id=$_GET['id'];
        $paciente = $_POST['paciente'];
        $edad = $_POST['edad'];
        $peso = $_POST['peso'];
        $talla = $_POST['talla'];
        $ta = $_POST['ta'];
        $fe = $_POST['fe'];
        $temp = $_POST['temp'];
        $receta = $_POST['receta'];

        $query="UPDATE receta set `paciente`='$paciente',`edad`='$edad',`peso`='$peso',`talla`='$talla',
        `ta`='$ta',`fe`='$fe',`temp`='$fe',`receta`='$receta' WHERE id_receta = '$id_receta'";
        mysqli_query($conexion,$query);
        header("location: ./receta.php");
    }
?>

<?php include "./includes/header.php"?>

<div class="conteiner p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
<!---------------------------------------------------------------------------->
            <form action="modificarReceta.php?id=<?php echo $_GET['id']; ?>" method="POST">

            <div class="form-group">
                            <input type="text" name="paciente" class="form-control" placeholder="Nombre del paciente" autofocus
                            value="<?php echo $paciente?>"required pattern="[A-Za-z ]{3,40}" title="Solo se aceptan letras">
                        </div>

                        <div class="form-group">
                            <input type="text" name="edad" class="form-control" placeholder="Edad del paciente" autofocus
                            value="<?php echo $edad?>" required pattern="[0-9]{1,3}" title="Solo se aceptan numeros">
                            <label for=""> Peso del paciente
                                <select name="peso" id="">
                                <option value=""></option>
                                    <option value="1">1 kilogramo</option>
                                    <option value="2">2 kilogramos</option>
                                    <option value="3">3 kilogramos</option>
                                    <option value="4">4 kilogramos</option>
                                    <option value="5">5 kilogramos</option>
                                    <option value="6">6 kilogramos</option>
                                    <option value="7">7 kilogramos</option>
                                    <option value="8">8 kilogramos</option>
                                    <option value="9">9 kilogramos</option>
                                    <option value="10">10 kilogramos</option>
                                    <option value="11">11 kilogramos</option>
                                    <option value="12">12 kilogramos</option>
                                    <option value="13">13 kilogramos</option>
                                    <option value="14">14 kilogramos</option>
                                    <option value="15">15 kilogramos</option>
                                    <option value="16">16 kilogramos</option>
                                    <option value="17">17 kilogramos</option>
                                    <option value="18">18 kilogramos</option>
                                    <option value="19">19 kilogramos</option>
                                    <option value="20">20 kilogramos</option>
                                    <option value="21">21 kilogramos</option>
                                    <option value="22">22 kilogramos</option>
                                    <option value="23">23 kilogramos</option>
                                    <option value="24">24 kilogramos</option>
                                    <option value="25">25 kilogramos</option>
                                    <option value="26">26 kilogramos</option>
                                    <option value="27">27 kilogramos</option>
                                    <option value="28">28 kilogramos</option>
                                    <option value="29">29 kilogramos</option>
                                    <option value="30">30 kilogramos</option>
                                    <option value="31">31 kilogramos</option>
                                    <option value="32">32 kilogramos</option>
                                    <option value="33">33 kilogramos</option>
                                    <option value="34">34 kilogramos</option>
                                    <option value="35">35 kilogramos</option>
                                    <option value="36">36 kilogramos</option>
                                    <option value="37">37 kilogramos</option>
                                    <option value="38">38 kilogramos</option>
                                    <option value="39">39 kilogramos</option>
                                    <option value="40">40 kilogramos</option>
                                    <option value="41">41 kilogramos</option>
                                    <option value="42">42 kilogramos</option>
                                    <option value="43">43 kilogramos</option>
                                    <option value="44">44 kilogramos</option>
                                    <option value="45">45 kilogramos</option>
                                    <option value="46">46 kilogramos</option>
                                    <option value="47">47 kilogramos</option>
                                    <option value="48">48 kilogramos</option>
                                    <option value="49">49 kilogramos</option>
                                    <option value="50">50 kilogramos</option>
                                    <option value="51">51 kilogramos</option>
                                    <option value="52">52 kilogramos</option>
                                    <option value="53">53 kilogramos</option>
                                    <option value="54">54 kilogramo</option>
                                    <option value="55">55 kilogramos</option>
                                    <option value="56">56 kilogramos</option>
                                    <option value="57">57 kilogramos</option>
                                    <option value="58">58 kilogramos</option>
                                    <option value="59">59 kilogramos</option>
                                    <option value="60">60 kilogramos</option>
                                    <option value="61">61 kilogramos</option>
                                    <option value="62">62 kilogramos</option>
                                    <option value="63">63 kilogramos</option>
                                    <option value="64">64 kilogramos</option>
                                    <option value="65">65 kilogramos</option>
                                    <option value="66">66 kilogramos</option>
                                    <option value="67">67 kilogramos</option>
                                    <option value="68">68 kilogramos</option>
                                    <option value="69">69 kilogramos</option>
                                    <option value="70">70 kilogramos</option>
                                    <option value="71">71 kilogramos</option>
                                    <option value="72">72 kilogramos</option>
                                    <option value="73">73 kilogramos</option>
                                    <option value="74">74 kilogramos</option>
                                    <option value="75">75 kilogramos</option>
                                    <option value="76">76 kilogramos</option>
                                    <option value="77">77 kilogramos</option>
                                    <option value="78">78 kilogramos</option>
                                    <option value="79">79 kilogramos</option>
                                    <option value="80">80 kilogramos</option>
                                    <option value="81">81 kilogramos</option>
                                    <option value="82">82 kilogramos</option>
                                    <option value="83">83 kilogramos</option>
                                    <option value="84">84 kilogramos</option>
                                    <option value="85">85 kilogramos</option>
                                    <option value="86">86 kilogramos</option>
                                    <option value="87">87 kilogramos</option>
                                    <option value="88">88 kilogramos</option>
                                    <option value="89">89 kilogramos</option>
                                    <option value="90">90 kilogramos</option>
                                    <option value="91">91 kilogramos</option>
                                    <option value="92">92 kilogramos</option>
                                    <option value="93">93 kilogramos</option>
                                    <option value="94">94 kilogramos</option>
                                    <option value="95">95 kilogramos</option>
                                    <option value="96">96 kilogramos</option>
                                    <option value="97">97 kilogramos</option>
                                    <option value="98">98 kilogramos</option>
                                    <option value="99">99 kilogramos</option>
                                    <option value="100">100 kilogramos</option>
                                    <option value="101">101 kilogramos</option>
                                    <option value="102">102 kilogramos</option>
                                    <option value="103">103 kilogramos</option>
                                    <option value="104">104 kilogramos</option>
                                    <option value="105">105 kilogramos</option>
                                    <option value="106">106 kilogramos</option>
                                    <option value="107">107 kilogramos</option>
                                    <option value="108">108 kilogramos</option>
                                    <option value="109">109 kilogramos</option>
                                    <option value="110">110 kilogramos</option>
                                    <option value="111">111 kilogramos</option>
                                    <option value="112">112 kilogramos</option>
                                    <option value="113">113 kilogramos</option>
                                    <option value="114">114 kilogramos</option>
                                    <option value="115">115 kilogramos</option>
                                    <option value="116">116 kilogramos</option>
                                    <option value="117">117 kilogramos</option>
                                    <option value="118">118 kilogramos</option>
                                    <option value="119">119 kilogramos</option>
                                    <option value="120">120 kilogramos</option>
                                    <option value="121">121 kilogramos</option>
                                    <option value="122">122 kilogramos</option>
                                    <option value="123">123 kilogramos</option>
                                    <option value="124">124 kilogramos</option>
                                    <option value="125">125 kilogramos</option>
                                    <option value="126">126 kilogramos</option>
                                    <option value="127">127 kilogramos</option>
                                    <option value="128">128 kilogramos</option>
                                    <option value="129">129 kilogramos</option>
                                    <option value="130">130 kilogramos</option>
                                    <option value="131">131 kilogramos</option>
                                    <option value="132">132 kilogramos</option>
                                    <option value="133">133 kilogramos</option>
                                    <option value="134">134 kilogramos</option>
                                    <option value="135">135 kilogramos</option>
                                    <option value="136">136 kilogramos</option>
                                    <option value="137">137 kilogramos</option>
                                    <option value="138">138 kilogramos</option>
                                    <option value="139">139 kilogramos</option>
                                    <option value="140">140 kilogramos</option>
                                    <option value="141">141 kilogramos</option>
                                    <option value="142">142 kilogramos</option>
                                    <option value="143">143 kilogramos</option>
                                    <option value="144">144 kilogramos</option>
                                    <option value="145">145 kilogramos</option>
                                    <option value="146">146 kilogramos</option>
                                    <option value="147">147 kilogramos</option>
                                    <option value="148">148 kilogramos</option>
                                    <option value="149">149 kilogramos</option>
                                </select>
                            </label>
                            <label for=""> Talla del paciente
                                <select name="talla" id="">

                                <option value=""></option>
                                    <option value="30cm">30 centímetros</option>
                                    <option value="31cm">31 centímetros</option>
                                    <option value="32cm">32 centímetros</option>
                                    <option value="33cm">33 centímetros</option>
                                    <option value="34cm">34 centímetros</option>
                                    <option value="35cm">35 centímetros</option>
                                    <option value="36cm">36 centímetros</option>
                                    <option value="37cm">37 centímetros</option>
                                    <option value="38cm">38 centímetros</option>
                                    <option value="39cm">39 centímetros</option>
                                    <option value="40cm">40 centímetros</option>
                                    <option value="41cm">41 centímetros</option>
                                    <option value="42cm">42 centímetros</option>
                                    <option value="43cm">43 centímetros</option>
                                    <option value="44cm">44 centímetros</option>
                                    <option value="45cm">45 centímetros</option>
                                    <option value="46cm">46 centímetros</option>
                                    <option value="47cm">47 centímetros</option>
                                    <option value="48cm">48 centímetros</option>
                                    <option value="49cm">49 centímetros</option>
                                    <option value="50cm">50 centímetros</option>
                                    <option value="51cm">51 centímetros</option>
                                    <option value="52cm">52 centímetros</option>
                                    <option value="53cm">53 centímetros</option>
                                    <option value="54cm">54 centímetros</option>
                                    <option value="55cm">55 centímetros</option>
                                    <option value="56cm">56 centímetros</option>
                                    <option value="57cm">57 centímetros</option>
                                    <option value="58cm">58 centímetros</option>
                                    <option value="59cm">59 centímetros</option>
                                    <option value="60cm">60 centímetros</option>
                                    <option value="61cm">61 centímetros</option>
                                    <option value="62cm">62 centímetros</option>
                                    <option value="63cm">63 centímetros</option>
                                    <option value="64cm">64 centímetros</option>
                                    <option value="65cm">65 centímetros</option>
                                    <option value="66cm">66 centímetros</option>
                                    <option value="67cm">67 centímetros</option>
                                    <option value="68cm">68 centímetros</option>
                                    <option value="69cm">69 centímetros</option>
                                    <option value="70cm">70 centímetros</option>
                                    <option value="71cm">71 centímetros</option>
                                    <option value="72cm">72 centímetros</option>
                                    <option value="73cm">73 centímetros</option>
                                    <option value="74cm">74 centímetros</option>
                                    <option value="75cm">75 centímetros</option>
                                    <option value="76cm">76 centímetros</option>
                                    <option value="77cm">77 centímetros</option>
                                    <option value="78cm">78 centímetros</option>
                                    <option value="79cm">79 centímetros</option>
                                    <option value="80cm">80 centímetros</option>
                                    <option value="81cm">81 centímetros</option>
                                    <option value="82cm">82 centímetros</option>
                                    <option value="83cm">83 centímetros</option>
                                    <option value="84cm">84 centímetros</option>
                                    <option value="85cm">85 centímetros</option>
                                    <option value="86cm">86 centímetros</option>
                                    <option value="87cm">87 centímetros</option>
                                    <option value="88cm">88 centímetros</option>
                                    <option value="89cm">89 centímetros</option>
                                    <option value="90cm">90 centímetros</option>
                                    <option value="91cm">91 centímetros</option>
                                    <option value="92cm">92 centímetros</option>
                                    <option value="93cm">93 centímetros</option>
                                    <option value="94cm">94 centímetros</option>
                                    <option value="95cm">95 centímetros</option>
                                    <option value="96cm">96 centímetros</option>
                                    <option value="97cm">97 centímetros</option>
                                    <option value="98cm">98 centímetros</option>
                                    <option value="99cm">99 centímetros</option>
                                    <option value="100cm">100 centímetros</option>
                                    <option value="101cm">101 centímetros</option>
                                    <option value="102cm">102 centímetros</option>
                                    <option value="103cm">103 centímetros</option>
                                    <option value="104cm">104 centímetros</option>
                                    <option value="105cm">105 centímetros</option>
                                    <option value="106cm">106 centímetros</option>
                                    <option value="107cm">107 centímetros</option>
                                    <option value="108cm">108 centímetros</option>
                                    <option value="109cm">109 centímetros</option>
                                    <option value="110cm">110 centímetros</option>
                                    <option value="111cm">111 centímetros</option>
                                    <option value="112cm">112 centímetros</option>
                                    <option value="113cm">113 centímetros</option>
                                    <option value="114cm">114 centímetros</option>
                                    <option value="115cm">115 centímetros</option>
                                    <option value="116cm">116 centímetros</option>
                                    <option value="117cm">117 centímetros</option>
                                    <option value="118cm">118 centímetros</option>
                                    <option value="119cm">119 centímetros</option>
                                    <option value="120cm">120 centímetros</option>
                                    <option value="121cm">121 centímetros</option>
                                    <option value="122cm">122 centímetros</option>
                                    <option value="123cm">123 centímetros</option>
                                    <option value="124cm">124 centímetros</option>
                                    <option value="125cm">125 centímetros</option>
                                    <option value="126cm">126 centímetros</option>
                                    <option value="127cm">127 centímetros</option>
                                    <option value="128cm">128 centímetros</option>
                                    <option value="129cm">129 centímetros</option>
                                    <option value="130cm">130 centímetros</option>
                                    <option value="131cm">131 centímetros</option>
                                    <option value="132cm">132 centímetros</option>
                                    <option value="133cm">133 centímetros</option>
                                    <option value="134cm">134 centímetros</option>
                                    <option value="135cm">135 centímetros</option>
                                    <option value="136cm">136 centímetros</option>
                                    <option value="137cm">137 centímetros</option>
                                    <option value="138cm">138 centímetros</option>
                                    <option value="139cm">139 centímetros</option>
                                    <option value="140cm">140 centímetros</option>
                                    <option value="141cm">141 centímetros</option>
                                    <option value="142cm">142 centímetros</option>
                                    <option value="143cm">143 centímetros</option>
                                    <option value="144cm">144 centímetros</option>
                                    <option value="145cm">145 centímetros</option>
                                    <option value="146cm">146 centímetros</option>
                                    <option value="147cm">147 centímetros</option>
                                    <option value="148cm">148 centímetros</option>
                                    <option value="149cm">149 centímetros</option>
                                    <option value="150cm">150 centímetros</option>
                                    <option value="151cm">151 centímetros</option>
                                    <option value="152cm">152 centímetros</option>
                                    <option value="153cm">153 centímetros</option>
                                    <option value="154cm">154 centímetros</option>
                                    <option value="155cm">155 centímetros</option>
                                    <option value="156cm">156 centímetros</option>
                                    <option value="157cm">157 centímetros</option>
                                    <option value="158cm">158 centímetros</option>
                                    <option value="159cm">159 centímetros</option>
                                    <option value="160cm">160 centímetros</option>
                                    <option value="161cm">161 centímetros</option>
                                    <option value="162cm">162 centímetros</option>
                                    <option value="163cm">163 centímetros</option>
                                    <option value="164cm">164 centímetros</option>
                                    <option value="165cm">165 centímetros</option>
                                    <option value="166cm">166 centímetros</option>
                                    <option value="167cm">167 centímetros</option>
                                    <option value="168cm">168 centímetros</option>
                                    <option value="169cm">169 centímetros</option>
                                    <option value="170cm">170 centímetros</option>
                                    <option value="171cm">171 centímetros</option>
                                    <option value="172cm">172 centímetros</option>
                                    <option value="173cm">173 centímetros</option>
                                    <option value="174cm">174 centímetros</option>
                                    <option value="175cm">175 centímetros</option>
                                    <option value="176cm">176 centímetros</option>
                                    <option value="177cm">177 centímetros</option>
                                    <option value="178cm">178 centímetros</option>
                                    <option value="179cm">179 centímetros</option>
                                    <option value="180cm">180 centímetros</option>
                                    <option value="181cm">181 centímetros</option>
                                    <option value="182cm">182 centímetros</option>
                                    <option value="183cm">183 centímetros</option>
                                    <option value="184cm">184 centímetros</option>
                                    <option value="185cm">185 centímetros</option>
                                    <option value="186cm">186 centímetros</option>
                                    <option value="187cm">187 centímetros</option>
                                    <option value="188cm">188 centímetros</option>
                                    <option value="189cm">189 centímetros</option>
                                    <option value="190cm">190 centímetros</option>
                                    <option value="191cm">191 centímetros</option>
                                    <option value="192cm">192 centímetros</option>
                                    <option value="193cm">193 centímetros</option>
                                    <option value="194cm">194 centímetros</option>
                                    <option value="195cm">195 centímetros</option>
                                    <option value="196cm">196 centímetros</option>
                                    <option value="197cm">197 centímetros</option>
                                    <option value="198cm">198 centímetros</option>
                                    <option value="199cm">199 centímetros</option>
                                    
                                    <option value="200cm">200 centímetros</option>
                                    <option value="201cm">201 centímetros</option>
                                    <option value="202cm">202 centímetros</option>
                                    <option value="203cm">203 centímetros</option>
                                    <option value="204cm">204 centímetros</option>
                                    <option value="205cm">205 centímetros</option>
                                    <option value="206cm">206 centímetros</option>
                                    <option value="207cm">207 centímetros</option>
                                    <option value="208cm">208 centímetros</option>
                                    <option value="209cm">209 centímetros</option>
                                    <option value="210cm">210 centímetros</option>
                                    <option value="211cm">211 centímetros</option>
                                    <option value="212cm">212 centímetros</option>
                                    <option value="213cm">213 centímetros</option>
                                    <option value="214cm">214 centímetros</option>
                                    <option value="215cm">215 centímetros</option>
                                    <option value="216cm">216 centímetros</option>
                                    <option value="217cm">217 centímetros</option>
                                    <option value="218cm">218 centímetros</option>
                                    <option value="219cm">219 centímetros</option>
                                    <option value="220cm">220 centímetros</option>
                                    <option value="221cm">221 centímetros</option>
                                    <option value="222cm">222 centímetros</option>
                                    <option value="223cm">223 centímetros</option>
                                    <option value="224cm">224 centímetros</option>
                                    <option value="225cm">225 centímetros</option>
                                    <option value="226cm">226 centímetros</option>
                                    <option value="227cm">227 centímetros</option>
                                    <option value="228cm">228 centímetros</option>
                                    <option value="229cm">229 centímetros</option>

                                </select>
                            </label>
                            <input type="text" name="ta" class="form-control" placeholder="ta" autofocus
                            value="<?php echo $ta?>" required pattern="[0123456789/]{5,6}" title="por ejemplo 180/80">

                            <input type="text" name="fe" class="form-control" placeholder="fe" autofocus
                            value="<?php echo $fe?>"required pattern="[0123456789]{0,6}" title="solo numeros">
                            <label for="">Temperatura del paciente
                                <select name="temp" id="">
                                    <option value="30">30 grados</option>
                                    <option value="31">31 grados</option>
                                    <option value="32">32 grados</option>
                                    <option value="33">33 grados</option>
                                    <option value="34">34 grados</option>
                                    <option value="35">35 grados</option>
                                    <option value="36">36 grados</option>
                                    <option value="37">37 grados</option>
                                    <option value="38">38 grados</option>
                                    <option value="39">39 grados</option>
                                    <option value="40">40 grados</option>
                                    <option value="41">41 grados</option>
                                    <option value="42">42 grados</option>
                                    <option value="43">43 grados</option>
                                    <option value="44">44 grados</option>
                                    <option value="45">45 grados</option>
                                </select>
                            </label>
                        </div>

                        <div class="form-group">
                            <textarea name="receta" rows="2" class="form-control" placeholder="Descripcion de la receta Medica"
                            required pattern="[A-Za-z0-9 ]"><?php echo $receta?></textarea>
                        </div>
        
                        <input type="submit" class="btn btn-success btn-block" name="modificar" value="Modificar Receta">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./includes/footer.php"?>
   
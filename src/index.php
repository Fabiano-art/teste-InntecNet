<?php
    include "./util/util.php";

    $inst = new RandomNumbers();

    $inst->generate(1, 60);

    $numeros = $inst->getNumbers();

    // foreach ($numeros as $value) {
    //     echo $value . "<br>";
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <title>InntecNet</title>
</head>
<body>

<main>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-4">
                <table class="table table-striped" id="first-table">
                    <tbody>
                        <tr>
                            <td scope="col">1</td>
                            <td scope="col">2</td>
                            <td scope="col">3</td>
                            <td scope="col">4</td>
                            <td scope="col">5</td>
                            <td scope="col">6</td>
                            <td scope="col">7</td>
                            <td scope="col">8</td>
                            <td scope="col">9</td>
                            <td scope="col">10</td>
                        </tr>
                        <tr>
                            <td scope="col">11</td>
                            <td scope="col">12</td>
                            <td scope="col">13</td>
                            <td scope="col">14</td>
                            <td scope="col">15</td>
                            <td scope="col">16</td>
                            <td scope="col">17</td>
                            <td scope="col">18</td>
                            <td scope="col">19</td>
                            <td scope="col">20</td>
                        </tr>
                        <tr>
                            <td scope="col">21</td>
                            <td scope="col">22</td>
                            <td scope="col">23</td>
                            <td scope="col">24</td>
                            <td scope="col">25</td>
                            <td scope="col">26</td>
                            <td scope="col">27</td>
                            <td scope="col">28</td>
                            <td scope="col">29</td>
                            <td scope="col">30</td>
                        </tr>
                        <tr>
                            <td scope="col">31</td>
                            <td scope="col">32</td>
                            <td scope="col">33</td>
                            <td scope="col">34</td>
                            <td scope="col">35</td>
                            <td scope="col">36</td>
                            <td scope="col">37</td>
                            <td scope="col">38</td>
                            <td scope="col">39</td>
                            <td scope="col">40</td>
                        </tr>
                        <tr>
                            <td scope="col">41</td>
                            <td scope="col">42</td>
                            <td scope="col">43</td>
                            <td scope="col">44</td>
                            <td scope="col">45</td>
                            <td scope="col">46</td>
                            <td scope="col">47</td>
                            <td scope="col">48</td>
                            <td scope="col">49</td>
                            <td scope="col">50</td>
                        </tr>
                        <tr>
                            <td scope="col">51</td>
                            <td scope="col">52</td>
                            <td scope="col">53</td>
                            <td scope="col">54</td>
                            <td scope="col">55</td>
                            <td scope="col">56</td>
                            <td scope="col">57</td>
                            <td scope="col">58</td>
                            <td scope="col">59</td>
                            <td scope="col">60</td>
                        </tr>
                    <tbody>
                </table>

                <div class="container">
                    <div class="row">
                        <h2 class="centerlized">Aposta</h2>
                        <div class="col-4 border">...</div>
                        <div class="col-4 border">...</div>
                        <div class="col-4 border">...</div>
                        <div class="col-4 border">...</div>
                        <div class="col-4 border">...</div>
                        <div class="col-4 border">...</div>
                    </div>
                </div>
                
            </div>

            <div class="col-4">
            <table class="table table-striped" id="second-table">
                    <tbody>
                        <tr>
                            <td scope="col">1</td>
                            <td scope="col">2</td>
                            <td scope="col">3</td>
                            <td scope="col">4</td>
                            <td scope="col">5</td>
                            <td scope="col">6</td>
                            <td scope="col">7</td>
                            <td scope="col">8</td>
                            <td scope="col">9</td>
                            <td scope="col">10</td>
                        </tr>
                        <tr>
                            <td scope="col">11</td>
                            <td scope="col">12</td>
                            <td scope="col">13</td>
                            <td scope="col">14</td>
                            <td scope="col">15</td>
                            <td scope="col">16</td>
                            <td scope="col">17</td>
                            <td scope="col">18</td>
                            <td scope="col">19</td>
                            <td scope="col">20</td>
                        </tr>
                        <tr>
                            <td scope="col">21</td>
                            <td scope="col">22</td>
                            <td scope="col">23</td>
                            <td scope="col">24</td>
                            <td scope="col">25</td>
                            <td scope="col">26</td>
                            <td scope="col">27</td>
                            <td scope="col">28</td>
                            <td scope="col">29</td>
                            <td scope="col">30</td>
                        </tr>
                        <tr>
                            <td scope="col">31</td>
                            <td scope="col">32</td>
                            <td scope="col">33</td>
                            <td scope="col">34</td>
                            <td scope="col">35</td>
                            <td scope="col">36</td>
                            <td scope="col">37</td>
                            <td scope="col">38</td>
                            <td scope="col">39</td>
                            <td scope="col">40</td>
                        </tr>
                        <tr>
                            <td scope="col">41</td>
                            <td scope="col">42</td>
                            <td scope="col">43</td>
                            <td scope="col">44</td>
                            <td scope="col">45</td>
                            <td scope="col">46</td>
                            <td scope="col">47</td>
                            <td scope="col">48</td>
                            <td scope="col">49</td>
                            <td scope="col">50</td>
                        </tr>
                        <tr>
                            <td scope="col">51</td>
                            <td scope="col">52</td>
                            <td scope="col">53</td>
                            <td scope="col">54</td>
                            <td scope="col">55</td>
                            <td scope="col">56</td>
                            <td scope="col">57</td>
                            <td scope="col">58</td>
                            <td scope="col">59</td>
                            <td scope="col">60</td>
                        </tr>
                    <tbody>
                </table>
                <div class="container">
                    <div class="row">
                        <h2 class="centerlized">Aposta</h2>
                        <div class="col-4 border">...</div>
                        <div class="col-4 border">...</div>
                        <div class="col-4 border">...</div>
                        <div class="col-4 border">...</div>
                        <div class="col-4 border">...</div>
                        <div class="col-4 border">...</div>
                    </div>
                </div>
            </div>

            <div class="col-4">
            <table class="table table-striped" id="third-table">
                    <tbody>
                        <tr>
                            <td scope="col">1</td>
                            <td scope="col">2</td>
                            <td scope="col">3</td>
                            <td scope="col">4</td>
                            <td scope="col">5</td>
                            <td scope="col">6</td>
                            <td scope="col">7</td>
                            <td scope="col">8</td>
                            <td scope="col">9</td>
                            <td scope="col">10</td>
                        </tr>
                        <tr>
                            <td scope="col">11</td>
                            <td scope="col">12</td>
                            <td scope="col">13</td>
                            <td scope="col">14</td>
                            <td scope="col">15</td>
                            <td scope="col">16</td>
                            <td scope="col">17</td>
                            <td scope="col">18</td>
                            <td scope="col">19</td>
                            <td scope="col">20</td>
                        </tr>
                        <tr>
                            <td scope="col">21</td>
                            <td scope="col">22</td>
                            <td scope="col">23</td>
                            <td scope="col">24</td>
                            <td scope="col">25</td>
                            <td scope="col">26</td>
                            <td scope="col">27</td>
                            <td scope="col">28</td>
                            <td scope="col">29</td>
                            <td scope="col">30</td>
                        </tr>
                        <tr>
                            <td scope="col">31</td>
                            <td scope="col">32</td>
                            <td scope="col">33</td>
                            <td scope="col">34</td>
                            <td scope="col">35</td>
                            <td scope="col">36</td>
                            <td scope="col">37</td>
                            <td scope="col">38</td>
                            <td scope="col">39</td>
                            <td scope="col">40</td>
                        </tr>
                        <tr>
                            <td scope="col">41</td>
                            <td scope="col">42</td>
                            <td scope="col">43</td>
                            <td scope="col">44</td>
                            <td scope="col">45</td>
                            <td scope="col">46</td>
                            <td scope="col">47</td>
                            <td scope="col">48</td>
                            <td scope="col">49</td>
                            <td scope="col">50</td>
                        </tr>
                        <tr>
                            <td scope="col">51</td>
                            <td scope="col">52</td>
                            <td scope="col">53</td>
                            <td scope="col">54</td>
                            <td scope="col">55</td>
                            <td scope="col">56</td>
                            <td scope="col">57</td>
                            <td scope="col">58</td>
                            <td scope="col">59</td>
                            <td scope="col">60</td>
                        </tr>
                    <tbody>
                </table>
                <div class="container">
                    <h2 class="centerlized">Aposta</h2>
                    <div class="row">
                        <div class="col-4 border">...</div>
                        <div class="col-4 border">...</div>
                        <div class="col-4 border">...</div>
                        <div class="col-4 border">...</div>
                        <div class="col-4 border">...</div>
                        <div class="col-4 border">...</div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="row justify-content-center ">
        <button class="btn btn-primary col-4">Gerar apostas</button>
    </div>

</main>
    
</body>
</html>
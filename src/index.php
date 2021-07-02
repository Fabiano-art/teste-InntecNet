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
                            <td scope="col" data-secao-apostas-1>1</td>
                            <td scope="col" data-secao-apostas-1>2</td>
                            <td scope="col" data-secao-apostas-1>3</td>
                            <td scope="col" data-secao-apostas-1>4</td>
                            <td scope="col" data-secao-apostas-1>5</td>
                            <td scope="col" data-secao-apostas-1>6</td>
                            <td scope="col" data-secao-apostas-1>7</td>
                            <td scope="col" data-secao-apostas-1>8</td>
                            <td scope="col" data-secao-apostas-1>9</td>
                            <td scope="col" data-secao-apostas-1>10</td>
                        </tr>
                        <tr>
                            <td scope="col" data-secao-apostas-1>11</td>
                            <td scope="col" data-secao-apostas-1>12</td>
                            <td scope="col" data-secao-apostas-1>13</td>
                            <td scope="col" data-secao-apostas-1>14</td>
                            <td scope="col" data-secao-apostas-1>15</td>
                            <td scope="col" data-secao-apostas-1>16</td>
                            <td scope="col" data-secao-apostas-1>17</td>
                            <td scope="col" data-secao-apostas-1>18</td>
                            <td scope="col" data-secao-apostas-1>19</td>
                            <td scope="col" data-secao-apostas-1>20</td>
                        </tr>
                        <tr>
                            <td scope="col" data-secao-apostas-1>21</td>
                            <td scope="col" data-secao-apostas-1>22</td>
                            <td scope="col" data-secao-apostas-1>23</td>
                            <td scope="col" data-secao-apostas-1>24</td>
                            <td scope="col" data-secao-apostas-1>25</td>
                            <td scope="col" data-secao-apostas-1>26</td>
                            <td scope="col" data-secao-apostas-1>27</td>
                            <td scope="col" data-secao-apostas-1>28</td>
                            <td scope="col" data-secao-apostas-1>29</td>
                            <td scope="col" data-secao-apostas-1>30</td>
                        </tr>
                        <tr>
                            <td scope="col" data-secao-apostas-1>31</td>
                            <td scope="col" data-secao-apostas-1>32</td>
                            <td scope="col" data-secao-apostas-1>33</td>
                            <td scope="col" data-secao-apostas-1>34</td>
                            <td scope="col" data-secao-apostas-1>35</td>
                            <td scope="col" data-secao-apostas-1>36</td>
                            <td scope="col" data-secao-apostas-1>37</td>
                            <td scope="col" data-secao-apostas-1>38</td>
                            <td scope="col" data-secao-apostas-1>39</td>
                            <td scope="col" data-secao-apostas-1>40</td>
                        </tr>
                        <tr>
                            <td scope="col" data-secao-apostas-1>41</td>
                            <td scope="col" data-secao-apostas-1>42</td>
                            <td scope="col" data-secao-apostas-1>43</td>
                            <td scope="col" data-secao-apostas-1>44</td>
                            <td scope="col" data-secao-apostas-1>45</td>
                            <td scope="col" data-secao-apostas-1>46</td>
                            <td scope="col" data-secao-apostas-1>47</td>
                            <td scope="col" data-secao-apostas-1>48</td>
                            <td scope="col" data-secao-apostas-1>49</td>
                            <td scope="col" data-secao-apostas-1>50</td>
                        </tr>
                        <tr>
                            <td scope="col" data-secao-apostas-1>51</td>
                            <td scope="col" data-secao-apostas-1>52</td>
                            <td scope="col" data-secao-apostas-1>53</td>
                            <td scope="col" data-secao-apostas-1>54</td>
                            <td scope="col" data-secao-apostas-1>55</td>
                            <td scope="col" data-secao-apostas-1>56</td>
                            <td scope="col" data-secao-apostas-1>57</td>
                            <td scope="col" data-secao-apostas-1>58</td>
                            <td scope="col" data-secao-apostas-1>59</td>
                            <td scope="col" data-secao-apostas-1>60</td>
                        </tr>
                    <tbody>
                </table>

                <div class="container">
                    <div class="row" id="secao-apostas-1">
                        <h2 class="centerlized">Aposta</h2>
                        <?php
                            $inst_1 = new RandomNumbers();

                            $inst_1->generate(1, 60);
                        
                            $numeros_1 = $inst_1->getNumbers();

                            foreach ($numeros_1 as $value_1) {
                                echo "<div class='col-4 border' sorteado-1>" . $value_1 . "</div>";
                            }
                        ?>
                    </div>
                </div>
                
            </div>

            <div class="col-4">
            <table class="table table-striped" id="second-table">
                    <tbody>
                        <tr>
                            <td scope="col" data-secao-apostas-2>1</td>
                            <td scope="col" data-secao-apostas-2>2</td>
                            <td scope="col" data-secao-apostas-2>3</td>
                            <td scope="col" data-secao-apostas-2>4</td>
                            <td scope="col" data-secao-apostas-2>5</td>
                            <td scope="col" data-secao-apostas-2>6</td>
                            <td scope="col" data-secao-apostas-2>7</td>
                            <td scope="col" data-secao-apostas-2>8</td>
                            <td scope="col" data-secao-apostas-2>9</td>
                            <td scope="col" data-secao-apostas-2>10</td>
                        </tr>
                        <tr>
                            <td scope="col" data-secao-apostas-2>11</td>
                            <td scope="col" data-secao-apostas-2>12</td>
                            <td scope="col" data-secao-apostas-2>13</td>
                            <td scope="col" data-secao-apostas-2>14</td>
                            <td scope="col" data-secao-apostas-2>15</td>
                            <td scope="col" data-secao-apostas-2>16</td>
                            <td scope="col" data-secao-apostas-2>17</td>
                            <td scope="col" data-secao-apostas-2>18</td>
                            <td scope="col" data-secao-apostas-2>19</td>
                            <td scope="col" data-secao-apostas-2>20</td>
                        </tr>
                        <tr>
                            <td scope="col" data-secao-apostas-2>21</td>
                            <td scope="col" data-secao-apostas-2>22</td>
                            <td scope="col" data-secao-apostas-2>23</td>
                            <td scope="col" data-secao-apostas-2>24</td>
                            <td scope="col" data-secao-apostas-2>25</td>
                            <td scope="col" data-secao-apostas-2>26</td>
                            <td scope="col" data-secao-apostas-2>27</td>
                            <td scope="col" data-secao-apostas-2>28</td>
                            <td scope="col" data-secao-apostas-2>29</td>
                            <td scope="col" data-secao-apostas-2>30</td>
                        </tr>
                        <tr>
                            <td scope="col" data-secao-apostas-2>31</td>
                            <td scope="col" data-secao-apostas-2>32</td>
                            <td scope="col" data-secao-apostas-2>33</td>
                            <td scope="col" data-secao-apostas-2>34</td>
                            <td scope="col" data-secao-apostas-2>35</td>
                            <td scope="col" data-secao-apostas-2>36</td>
                            <td scope="col" data-secao-apostas-2>37</td>
                            <td scope="col" data-secao-apostas-2>38</td>
                            <td scope="col" data-secao-apostas-2>39</td>
                            <td scope="col" data-secao-apostas-2>40</td>
                        </tr>
                        <tr>
                            <td scope="col" data-secao-apostas-2>41</td>
                            <td scope="col" data-secao-apostas-2>42</td>
                            <td scope="col" data-secao-apostas-2>43</td>
                            <td scope="col" data-secao-apostas-2>44</td>
                            <td scope="col" data-secao-apostas-2>45</td>
                            <td scope="col" data-secao-apostas-2>46</td>
                            <td scope="col" data-secao-apostas-2>47</td>
                            <td scope="col" data-secao-apostas-2>48</td>
                            <td scope="col" data-secao-apostas-2>49</td>
                            <td scope="col" data-secao-apostas-2>50</td>
                        </tr>
                        <tr>
                            <td scope="col" data-secao-apostas-2>51</td>
                            <td scope="col" data-secao-apostas-2>52</td>
                            <td scope="col" data-secao-apostas-2>53</td>
                            <td scope="col" data-secao-apostas-2>54</td>
                            <td scope="col" data-secao-apostas-2>55</td>
                            <td scope="col" data-secao-apostas-2>56</td>
                            <td scope="col" data-secao-apostas-2>57</td>
                            <td scope="col" data-secao-apostas-2>58</td>
                            <td scope="col" data-secao-apostas-2>59</td>
                            <td scope="col" data-secao-apostas-2>60</td>
                        </tr>
                    <tbody>
                </table>
                <div class="container">
                    <div class="row"  id="secao-apostas-2">
                        <h2 class="centerlized">Aposta</h2>
                        <?php
                            $inst_2 = new RandomNumbers();

                            $inst_2->generate(1, 60);
                        
                            $numeros_2 = $inst_2->getNumbers();

                            foreach ($numeros_2 as $value_2) {
                                echo "<div class='col-4 border' sorteado-2>" . $value_2 . "</div>";
                            }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-4">
            <table class="table table-striped" id="third-table">
                    <tbody>
                        <tr>
                            <td scope="col" data-secao-apostas-3>1</td>
                            <td scope="col" data-secao-apostas-3>2</td>
                            <td scope="col" data-secao-apostas-3>3</td>
                            <td scope="col" data-secao-apostas-3>4</td>
                            <td scope="col" data-secao-apostas-3>5</td>
                            <td scope="col" data-secao-apostas-3>6</td>
                            <td scope="col" data-secao-apostas-3>7</td>
                            <td scope="col" data-secao-apostas-3>8</td>
                            <td scope="col" data-secao-apostas-3>9</td>
                            <td scope="col" data-secao-apostas-3>10</td>
                        </tr>
                        <tr>
                            <td scope="col" data-secao-apostas-3>11</td>
                            <td scope="col" data-secao-apostas-3>12</td>
                            <td scope="col" data-secao-apostas-3>13</td>
                            <td scope="col" data-secao-apostas-3>14</td>
                            <td scope="col" data-secao-apostas-3>15</td>
                            <td scope="col" data-secao-apostas-3>16</td>
                            <td scope="col" data-secao-apostas-3>17</td>
                            <td scope="col" data-secao-apostas-3>18</td>
                            <td scope="col" data-secao-apostas-3>19</td>
                            <td scope="col" data-secao-apostas-3>20</td>
                        </tr>
                        <tr>
                            <td scope="col" data-secao-apostas-3>21</td>
                            <td scope="col" data-secao-apostas-3>22</td>
                            <td scope="col" data-secao-apostas-3>23</td>
                            <td scope="col" data-secao-apostas-3>24</td>
                            <td scope="col" data-secao-apostas-3>25</td>
                            <td scope="col" data-secao-apostas-3>26</td>
                            <td scope="col" data-secao-apostas-3>27</td>
                            <td scope="col" data-secao-apostas-3>28</td>
                            <td scope="col" data-secao-apostas-3>29</td>
                            <td scope="col" data-secao-apostas-3>30</td>
                        </tr>
                        <tr>
                            <td scope="col" data-secao-apostas-3>31</td>
                            <td scope="col" data-secao-apostas-3>32</td>
                            <td scope="col" data-secao-apostas-3>33</td>
                            <td scope="col" data-secao-apostas-3>34</td>
                            <td scope="col" data-secao-apostas-3>35</td>
                            <td scope="col" data-secao-apostas-3>36</td>
                            <td scope="col" data-secao-apostas-3>37</td>
                            <td scope="col" data-secao-apostas-3>38</td>
                            <td scope="col" data-secao-apostas-3>39</td>
                            <td scope="col" data-secao-apostas-3>40</td>
                        </tr>
                        <tr>
                            <td scope="col" data-secao-apostas-3>41</td>
                            <td scope="col" data-secao-apostas-3>42</td>
                            <td scope="col" data-secao-apostas-3>43</td>
                            <td scope="col" data-secao-apostas-3>44</td>
                            <td scope="col" data-secao-apostas-3>45</td>
                            <td scope="col" data-secao-apostas-3>46</td>
                            <td scope="col" data-secao-apostas-3>47</td>
                            <td scope="col" data-secao-apostas-3>48</td>
                            <td scope="col" data-secao-apostas-3>49</td>
                            <td scope="col" data-secao-apostas-3>50</td>
                        </tr>
                        <tr>
                            <td scope="col" data-secao-apostas-3>51</td>
                            <td scope="col" data-secao-apostas-3>52</td>
                            <td scope="col" data-secao-apostas-3>53</td>
                            <td scope="col" data-secao-apostas-3>54</td>
                            <td scope="col" data-secao-apostas-3>55</td>
                            <td scope="col" data-secao-apostas-3>56</td>
                            <td scope="col" data-secao-apostas-3>57</td>
                            <td scope="col" data-secao-apostas-3>58</td>
                            <td scope="col" data-secao-apostas-3>59</td>
                            <td scope="col" data-secao-apostas-3>60</td>
                        </tr>
                    <tbody>
                </table>
                <div class="container">
                    <h2 class="centerlized">Aposta</h2>
                    <div class="row">
                        <?php
                            $inst_3 = new RandomNumbers();

                            $inst_3->generate(1, 60);
                        
                            $numeros_3 = $inst_3->getNumbers();

                            foreach ($numeros_3 as $value_3) {
                                echo "<div class='col-4 border' sorteado-3>" . $value_3 . "</div>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="row justify-content-center ">
        <button class="btn btn-primary col-2" id="refresh">Gerar apostas</button>
        <button class="btn btn-secondary col-2 " id="marcar">Verificar resultados</button>
    </div>
</main>

<script src="./assets/js/jquery.min.js"></script>
<script>
    const refreshBtn = document.querySelector('#refresh');
    refreshBtn.addEventListener("click", function() {
        location.reload();
    });

    const markBtn = document.querySelector('#marcar');
    markBtn.addEventListener("click", function() {
        checkNumbers(1);
        checkNumbers(2);
        checkNumbers(3);
    });

    function checkNumbers(number){
        const sorteados = $(`[sorteado-${number}]`);
        const tabela = $(`[data-secao-apostas-${number}]`);
        
        for (let i = 0; i < 60; i++){
            for(let j = 0; j < 6; j++){
                tabela[i].innerText == sorteados[j].innerText ? tabela[i].classList.add('check') : null
            }
        }
    }
</script>
</body>
</html>
 

<?php $__env->startSection('header'); ?>

<?php echo $__env->make('site.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldSection(); ?>

<?php $__env->startSection('content'); ?>

<form method="POST" action="<?php echo e(route('liftStore')); ?>">
<input type="date" name="date" placeholder="Введите дату:" >

<select size="1"  name="address">
    <option selected disabled>Выберите адрес дома:</option>
    <option value="Оптиков 45">Оптиков 45</option>    
    <option value="Оптиков 49">Оптиков 49</option>
    <option value="Оптиков 50">Оптиков 50</option>
    <option value="Оптиков 52">Оптиков 52</option>
    <option value="Туристская 11">Туристская 11</option>
    <option value="Туристская 15">Туристская 15</option>
    <option value="Туристская 18">Туристская 18</option>
    <option value="Туристская 28">Туристская 28</option>
    <option value="Туристская Лыжная 3">Лыжная 3</option>
    <option value="Туристская Лыжная 4">Лыжная 4</option>
    <option value="Туристская Лыжная 10">Лыжная 10</option>
</select>

<select size="1"  name="front">
    <option selected disabled>Выберите № парадной:</option>
    <option value="1">1 парадная</option>    
    <option value="2">2 парадная</option>
    <option value="3">3 парадная</option>
    <option value="4">4 парадная</option>
    <option value="5">5 парадная</option>
    <option value="6">6 парадная</option>
    <option value="7">7 парадная</option>
    <option value="8">8 парадная</option>  
</select>
<select size="1"  name="typeOfLift">
    <option selected disabled>Выберите вид лифта:</option>
    <option value="Пассажирский">Пассажирский</option>    
    <option value="Грузовой">Грузовой</option>
    <option value="Пожарный">Пожарный</option>
    <option value="Грузовой">Левый грузовой</option>
    <option value="Грузовой">Правый грузовой</option>
   </select>

<input type="text" name="typeOfError" placeholder="Номер шибки:">
<input type="text" name="work" placeholder="Проделанная работа:" >
<input type="text" name="notice" placeholder="Пометка механник:">
 <button type="submit">Отправить</button>
 <?php echo e(csrf_field()); ?>

</form>

<?php echo $__env->yieldSection(); ?>
<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
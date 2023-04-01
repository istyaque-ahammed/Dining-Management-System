SELECT Student_name,transaction_id,Discipline_name
from student natural join payments
where payments.meal_type='Lunch'
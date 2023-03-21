SELECT Student_name,transaction_id
from student natural join payments
where student.Discipline_name= 'URP'
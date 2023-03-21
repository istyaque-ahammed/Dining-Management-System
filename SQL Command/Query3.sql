SELECT Date_of_transaction,student_name
from payments natural join student
where student.Discipline_name='CSE' and payments.Date_of_transaction >= '2023-03-01' and Date_of_transaction <='2023-03-28'
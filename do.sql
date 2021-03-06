CREATE TABLE APPLICANT_(email_id varchar(50) PRIMARY KEY, password varchar(50), username varchar(50), date_of_birth date, role varchar(50));
CREATE TABLE MOBILE_NO_(email_id varchar(50), mobile_no varchar(15), PRIMARY KEY(email_id, mobile_no), FOREIGN KEY(email_id) REFERENCES APPLICANT_(email_id));
CREATE TABLE TAGS_(email_id varchar(50), tag varchar(50), PRIMARY KEY(email_id, tag), FOREIGN KEY(email_id) REFERENCES APPLICANT_(email_id));
CREATE TABLE LOCATION_(email_id varchar(50), location varchar(50), PRIMARY KEY(email_id, location), FOREIGN KEY(email_id) REFERENCES APPLICANT_(email_id));
CREATE TABLE SKILLS_(email_id varchar(50), tag varchar(50), skill varchar(50), PRIMARY KEY(email_id, tag, skill), FOREIGN KEY(email_id) REFERENCES APPLICANT_(email_id));
CREATE TABLE ORGANIZATION_(email_id varchar(50), password varchar(50),org_reg varchar(50) PRIMARY KEY, org_name varchar(50), rating numeric(4,2), num_hired int, num_listings int);
CREATE TABLE EXPERIENCE_(email_id varchar(50), org_reg varchar(50), role varchar(50), start_date date, end_date date, years int, tag varchar(50) ,PRIMARY KEY(email_id,org_reg,role), FOREIGN KEY(email_id) REFERENCES APPLICANT_(email_id), FOREIGN KEY(org_reg) REFERENCES ORGANIZATION_(org_reg));
CREATE TABLE REVIEW_(org_reg varchar(50), rating numeric(4,2), comment varchar(100), PRIMARY KEY(org_reg,rating,comment), FOREIGN KEY(org_reg) REFERENCES ORGANIZATION_(org_reg));
CREATE TABLE QUALIFICATION_(email_id varchar(50), degree varchar(50), grade varchar(50), institute varchar(100), year int, PRIMARY KEY(email_id, degree), FOREIGN KEY(email_id) REFERENCES APPLICANT_(email_id));
CREATE TABLE JOB_LISTING_(org_reg varchar(50), job_id varchar(50), role varchar(50), tag varchar(50), location varchar(50), exp_req int, open_date date, close_date date, primary key(job_id), FOREIGN KEY(org_reg) REFERENCES ORGANIZATION_(org_reg));
CREATE TABLE JOB_SKILLS_(job_id varchar(50), skill varchar(50), PRIMARY KEY(job_id, skill), FOREIGN KEY(job_id) REFERENCES JOB_LISTING_(job_id));
CREATE TABLE APPLY_(email_id varchar(50), job_id varchar(50), apply_date date, PRIMARY KEY(email_id, job_id), FOREIGN KEY(email_id) REFERENCES APPLICANT_(email_id), FOREIGN KEY(job_id) REFERENCES JOB_LISTING_(job_id));

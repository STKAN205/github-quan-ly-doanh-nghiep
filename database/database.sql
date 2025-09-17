-- =======================
-- DROP TABLES IF EXISTS
-- =======================
DROP TABLE IF EXISTS account;
DROP TABLE IF EXISTS assignment;
DROP TABLE IF EXISTS person;
DROP TABLE IF EXISTS role;
DROP TABLE IF EXISTS project;
DROP TABLE IF EXISTS class;
DROP TABLE IF EXISTS person_type;

-- =======================
-- TABLE: class
-- =======================
CREATE TABLE class 
(
  id_class INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  description TEXT,

  created_at TIMESTAMP NULL,
  updated_at TIMESTAMP NULL
);

-- =======================
-- TABLE: person_type
-- =======================
CREATE TABLE person_type 
(
  id_person_type INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(80) NOT NULL UNIQUE,
  description TEXT,

  created_at TIMESTAMP NULL,
  updated_at TIMESTAMP NULL
);

-- =======================
-- TABLE: person
-- =======================
CREATE TABLE person (
  id_person INT PRIMARY KEY AUTO_INCREMENT,
  full_name VARCHAR(150) NOT NULL,
  gender INT COMMENT '1 = male, 0 = female, 3 = unknown',
  cccd VARCHAR(20) UNIQUE NOT NULL COMMENT 'giữ dạng text để không mất số 0 đầu',
  date_of_birth DATE,
  address VARCHAR(300),
  email VARCHAR(150) UNIQUE NOT NULL,
  phone VARCHAR(15),
  id_person_type INT NOT NULL,
  id_class INT NULL,
  is_active BOOLEAN DEFAULT TRUE,

  created_at TIMESTAMP NULL,
  updated_at TIMESTAMP NULL,

  CONSTRAINT fk_person_type FOREIGN KEY (id_person_type) REFERENCES person_type(id_person_type),
  CONSTRAINT fk_person_class FOREIGN KEY (id_class) REFERENCES class(id_class)
);

-- =======================
-- TABLE: project
-- =======================
CREATE TABLE project (
  id_project INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(200) NOT NULL UNIQUE,
  description TEXT,
  date_begin DATE,
  date_end DATE,
  status VARCHAR(20) NOT NULL DEFAULT 'planned',
  
  created_at TIMESTAMP NULL,
  updated_at TIMESTAMP NULL
);

-- =======================
-- TABLE: role
-- =======================
CREATE TABLE role (
  id_role INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(80) NOT NULL UNIQUE,
  description TEXT,

  created_at TIMESTAMP NULL,
  updated_at TIMESTAMP NULL
);

-- =======================
-- TABLE: assignment
-- =======================
CREATE TABLE assignment (
  id_assignment INT PRIMARY KEY AUTO_INCREMENT,
  id_person INT NOT NULL,
  id_project INT NOT NULL,
  id_role INT NOT NULL,
  date_begin DATETIME,
  date_end DATETIME,
  status VARCHAR(20) NOT NULL DEFAULT 'active',
  is_primary BOOLEAN DEFAULT FALSE,

  created_at TIMESTAMP NULL,
  updated_at TIMESTAMP NULL,

  CONSTRAINT fk_assignment_person FOREIGN KEY (id_person) REFERENCES person(id_person),
  CONSTRAINT fk_assignment_project FOREIGN KEY (id_project) REFERENCES project(id_project),
  CONSTRAINT fk_assignment_role FOREIGN KEY (id_role) REFERENCES role(id_role),
  CONSTRAINT uq_person_project_role UNIQUE (id_person, id_project, id_role),
  CONSTRAINT uq_person_project UNIQUE (id_person, id_project)
);

-- =======================
-- TABLE: account
-- =======================
CREATE TABLE account (
  id_account INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL COMMENT 'lưu mật khẩu đã mã hoá',
  id_person INT NOT NULL,
  id_role INT NOT NULL,
  is_active BOOLEAN DEFAULT TRUE,

  created_at TIMESTAMP NULL,
  updated_at TIMESTAMP NULL,

  CONSTRAINT fk_account_person FOREIGN KEY (id_person) REFERENCES person(id_person),
  CONSTRAINT fk_account_role FOREIGN KEY (id_role) REFERENCES role(id_role)
);

-- =======================
-- SAMPLE DATA
-- =======================

-- CLASS
INSERT INTO class (name, description) VALUES
('Class A', 'Intern group A'),
('Class B', 'Intern group B'),
('Class C', 'Intern group C');

-- PERSON_TYPE
INSERT INTO person_type (name, description) VALUES
('intern', 'Thực tập sinh'),
('leader', 'Trưởng nhóm'),
('mentor', 'Người hướng dẫn'),
('external', 'Đối tác ngoài');

-- PERSON
INSERT INTO person (full_name, gender, cccd, date_of_birth, address, email, phone, id_person_type, id_class)
VALUES
('Nguyen Van A', 1, '012345678900', '2000-05-12', 'Ha Noi', 'a@example.com', '0901234567', 1, 1),
('Tran Thi B', 0, '012345678901', '2001-07-20', 'Da Nang', 'b@example.com', '0902234567', 1, 2),
('Le Van C', 1, '012345678902', '1995-03-15', 'HCM', 'c@example.com', '0903234567', 2, NULL),
('Pham Thi D', 0, '012345678903', '1990-10-10', 'Hai Phong', 'd@example.com', '0904234567', 3, NULL),
('Hoang Van E', 1, '012345678904', '1985-01-01', 'Ha Noi', 'e@example.com', '0905234567', 4, NULL);

-- PROJECT
INSERT INTO project (name, description, date_begin, date_end, status)
VALUES
('Project Alpha', 'AI Research project', '2025-01-01', '2025-06-30', 'active'),
('Project Beta', 'Web Development', '2025-02-01', '2025-09-01', 'planned'),
('Project Gamma', 'Mobile App', '2025-03-15', '2025-12-31', 'planned');

-- ROLE
INSERT INTO role (name, description) VALUES
('Sys_Admin', 'Toàn quyền hệ thống'),
('Sys_Manager', 'Quản lý cao, nhưng không toàn quyền Admin'),
('Sys_User', 'quyền bị giới hạn (có thể xem hoặc thao tác tùy cài đặt)'),
('Proj_Manager', 'Quản lý toàn bộ dự án, phân công công việc, theo dõi tiến độ'),
('Proj_Leader', 'Trưởng nhóm kỹ thuật, giám sát nhóm con, đảm bảo chất lượng code và tiến độ task'),
('Proj_Member', 'Thành viên tham gia thực hiện task');

-- ASSIGNMENT
INSERT INTO assignment (id_person, id_project, id_role, date_begin, date_end, status, is_primary)
VALUES
(1, 1, 2, '2025-01-05', '2025-06-30', 'active', FALSE),
(2, 1, 2, '2025-01-10', '2025-06-30', 'active', FALSE),
(3, 1, 1, '2025-01-01', '2025-06-30', 'active', TRUE),
(4, 1, 4, '2025-01-02', '2025-06-30', 'active', FALSE),
(5, 2, 3, '2025-02-15', '2025-09-01', 'planned', FALSE);

-- ACCOUNT
INSERT INTO account (username, password, id_person, id_role)
VALUES
('nguyenvana', 'hashed_pw_a', 1, 2),
('tranthib', 'hashed_pw_b', 2, 2),
('levanc', 'hashed_pw_c', 3, 1),
('phamthid', 'hashed_pw_d', 4, 4),
('hoangvane', 'hashed_pw_e', 5, 3);

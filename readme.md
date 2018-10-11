laravel-demo   关于表单操作的
laravel-3.2.23  
数据表的sql
CREATE TABLE IF NOT EXISTS student(
                `id` INT AUTO_INCREMENT PRIMARY KEY,
                `name` VARCHAR(255) NOT NULL default '' comment '姓名',
                `age` TINYINT UNSIGNED NOT NULL DEFAULT 0 COMMENT '年龄',
                `sex` TINYINT UNSIGNED NOT NULL DEFAULT 10 COMMENT '性别',
                `created_at` INT NOT NULL DEFAULT 0 COMMENT '新增时间',
                `updated_at` INT NOT NULL DEFAULT 0 COMMENT '修改时间'
            )ENGINE=InnoDB DEFAULT CHARSET = UTF8 AUTO_INCREMENT=1001 COMMENT='学生表';


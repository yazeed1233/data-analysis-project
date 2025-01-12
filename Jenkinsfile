pipeline {
    agent any
    stages {
        stage('Clone') {
            steps {
                sh 'rm -rf data-analysis-project && git clone https://github.com/yazeed1233/data-analysis-project.git'
            }
        }
        stage('Deploy') {
            steps {
                sh 'docker compose down /data-analysis-project'
                sh 'docker compose up /data-analysis-project'
            }
        }
    }
}
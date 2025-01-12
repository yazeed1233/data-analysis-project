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
                sh 'cd data-analysis-project && ls -l'
                sh 'docker compose down'
                sh 'docker compose up'
            }
        }
    }
}